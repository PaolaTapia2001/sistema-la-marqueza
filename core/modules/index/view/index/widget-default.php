<?php
UserData::verificaSession();
date_default_timezone_set("America/Bogota");
$fechahoy = date("Y-m-d");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>

<body>
    <!-- Content Header -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>La Marqueza</h1>
      </div>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- Historia -->
      <!-- Historia -->
<div class="col-md-12">
  <div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title"><i class="fas fa-book-reader"></i> Nuestra Historia</h3>
    </div>
    <div class="card-body">
      <div class="row">
        <!-- Columna de la Imagen -->
        <div class="col-md-4">
          <img src="uploads/img/img1.avif" alt="Historia del Restaurante" class="img-fluid rounded shadow">
        </div>
        <!-- Columna del Texto -->
        <div class="col-md-8">
          <p>"Nuestro restaurante nació del deseo de compartir las recetas familiares que han pasado de generación en generación. Lo que comenzó como un pequeño proyecto en nuestra cocina, hoy es un espacio dedicado a preservar los sabores auténticos de nuestra tierra, utilizando ingredientes frescos y el toque casero que nos distingue."</p>
        </div>
      </div>
    </div>
  </div>
</div>
      <!-- Ubicación -->
      <div class="col-md-6">
        <div class="card card-success card-outline">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-map-marker-alt"></i> ¿Dónde encontrarnos?</h3>
          </div>
          <div class="card-body">
            <p><strong>Dirección:</strong> Av. Atahualpa y Miguel Leoro, Ibarra.</p>
            <!-- Puedes insertar aquí un iframe de Google Maps -->
          </div>
        </div>
      </div>

      <!-- Contactos -->
      <div class="col-md-6">
        <div class="card card-info card-outline">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-phone-alt"></i> Contactos</h3>
          </div>
          <div class="card-body">
            <ul class="list-unstyled">
              <li><i class="fas fa-phone"></i> Teléfono: (06) 295-2535</li>
              <li><i class="fas fa-envelope"></i> Email: LaMarqueza@restaurant.com</li>
              <li><i class="fab fa-whatsapp"></i> WhatsApp: +593 981069041</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

</html>