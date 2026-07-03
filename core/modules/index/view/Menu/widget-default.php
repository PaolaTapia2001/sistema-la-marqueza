<!-- Navegación de pestañas -->
<ul class="nav nav-tabs" id="menuTabs" role="tablist">
    <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#comidas">Comidas</button></li>
    <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#bebidas">Bebidas</button></li>
    <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#postres">Postres</button></li>
</ul>

<!-- Contenido -->
<div class="tab-content pt-4">
    
    <!-- COMIDAS -->
    <div class="tab-pane fade show active" id="comidas">
        <div class="row">
            <?php 
            $comidas = ["Lomo Saltado", "Ceviche Mixto", "Pollo a la Brasa", "Lasagna", "Ensalada César"];
            foreach ($comidas as $plato): ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $plato; ?></h5>
                            <p class="card-text">Deliciosa especialidad preparada con ingredientes frescos.</p>
                            <span class="fw-bold text-success">$12.00</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- BEBIDAS -->
    <div class="tab-pane fade" id="bebidas">
        <div class="row">
            <?php 
            $bebidas = ["Jugo Natural", "Limonada", "Café Americano", "Té Helado", "Agua Mineral"];
            foreach ($bebidas as $bebida): ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $bebida; ?></h5>
                            <p class="card-text">Refrescante bebida servida al momento.</p>
                            <span class="fw-bold text-success">$2.50</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- POSTRES -->
    <div class="tab-pane fade" id="postres">
        <div class="row">
            <?php 
            $postres = ["Volcán de Chocolate", "Cheesecake", "Flan de Caramelo", "Tiramisú", "Helado Artesanal"];
            foreach ($postres as $postre): ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $postre; ?></h5>
                            <p class="card-text">El toque dulce perfecto para terminar tu comida.</p>
                            <span class="fw-bold text-success">$4.00</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>