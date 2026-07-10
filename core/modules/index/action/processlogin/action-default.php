<?php
if (isset($_POST['btn-login'])) {
    $ucedula = $_POST['txtCedula'];
    $upass = $_POST['txtPassword'];
    
    // Aquí es donde el sistema verifica si el usuario es válido
    if ($user = UserData::getLogin($ucedula, $upass)) {
        
        // 1. Iniciamos la sesión
        session_start();
        
        // 2. Guardamos los datos que necesitamos en variables de sesión
        // Asegúrate de que $user contenga los campos de tu tabla (nombres, apellidos, foto, etc.)
        $_SESSION['usuario_id'] = $user->id; // Ajusta según la propiedad de tu objeto $user
        $_SESSION['usuario_nombre'] = $user->nombres . ' ' . $user->apellidos;
        $_SESSION['usuario_foto'] = $user->foto; // El nombre del archivo en la BD
        $_SESSION['usuario_fecha_registro'] = $user->fechanac;
        
        // 3. Redirigimos
        Core::redir("./?view=index");
    // ... después de validar que el usuario existe ...
if ($user = UserData::getLogin($ucedula, $upass)) {
    // 1. Iniciar sesión es obligatorio para que el layout pueda ver la variable
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    // 2. Definimos las variables de sesión que el layout espera
    $_SESSION['usuario_id'] = $ucedula; 
    $_SESSION['usuario_nombre'] = "Paola Tapia"; // Puedes cambiarlo dinámicamente si prefieres
    $_SESSION['usuario_foto'] = "paola.jpg"; 
    
    // 3. Redirigir al inicio para que el layout detecte la sesión activa
    Core::redir("./?view=index");
    exit();
}
        
    } else {
        print "<script>window.location='./?view=login';</script>";
        $_SESSION['user_error'] = "Acceso fallido !";
    }
}