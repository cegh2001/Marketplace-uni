
<!-- Cartas de publicacion para el inicio -->
<style>

    /*Estilos del fondo de las cartas*/
    .card {
        background-color:#ffff;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3); /* Agregar sombra */
        margin: 20px;
    }

    .btn {
      background-color: #E6DA50;
      color: rgb(255, 255, 255);
      margin-left: auto;
    }
    
    .btn:hover {
      background-color: #7591FA;
      color: black;
    }

    .pic {
      border-radius: 10px;
      margin-top: 2%;
      max-width: 100%;
      max-height: 300px;
      object-fit: contain;
      background-color: #fcf6b7;
    }

    .card-title {
      color: #7591FA;
    }

</style>


    <!-- Itera sobre cada publicación y muestra las tarjetas -->
<!-- Recorrer el arreglo de publicaciones -->
<?php foreach ($publicaciones as $publicacion) : ?>
    <div class="card" style="width: 18rem;">
    <img src="<?php echo base_url('public/uploads/' . $publicacion['imagen_prod']); ?>" class="card-img-top pic" alt="...">

        <div class="card-body">
            <h4 class="card-title"><?php echo $publicacion['nombre_public']; ?></h4>
            <h6 class="card-title"><?php echo $publicacion['descripcion']; ?></h6>

            <h5 class="card-text">
                
                <?php echo $publicacion['precio']; ?>
                <i class="fa-solid fa-dollar-sign fa-l"></i>
            </h5>

            <div class="card-btn text-end">
            <a href="<?php echo base_url('post/'.$publicacion['id_publicaciones']); ?>" class="btn btn-primary">Ver publicación</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>





