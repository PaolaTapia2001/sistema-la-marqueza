<!-- gestionar_usuarios.php -->
<div class="app-content">
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Gestión de Usuarios</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Cédula</th>
                            <th>Nombres</th>
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Obtenemos todos los usuarios usando la clase modelo existente
                        $usuarios = UserData::getAll(); 
                        foreach($usuarios as $user): ?>
                        <tr>
                            <td><?php echo $user->cedula; ?></td>
                            <td><?php echo $user->nombres . ' ' . $user->apellidos; ?></td>
                            <td><?php echo $user->email; ?></td>
                            <td>
                                <a href="?view=editar_usuario&id=<?php echo $user->id; ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="?view=eliminar_usuario&id=<?php echo $user->id; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>