<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">Formulario de Reserva</h3>
    </div>
    <div class="card-body">
        <form action="procesar_reserva.php" method="POST">
            <div class="row">
                <!-- Nombre del cliente -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" required>
                </div>
                <!-- Fecha de reserva -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Fecha</label>
                    <input type="date" class="form-control" name="fecha" required>
                </div>
            </div>
            <div class="row">
                <!-- Número de personas -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Número de Personas</label>
                    <input type="number" class="form-control" name="personas" min="1" max="20" required>
                </div>
                <!-- Hora de reserva -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Hora</label>
                    <input type="time" class="form-control" name="hora" required>
                </div>
            </div>
            <!-- Notas adicionales -->
            <div class="mb-3">
                <label class="form-label">Comentarios o Alergias</label>
                <textarea class="form-control" name="notas" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Confirmar Reserva</button>
        </form>
    </div>
</div>