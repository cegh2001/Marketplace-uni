<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMC Marketplace</title>

    <!---Libreria Bootstrap--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <!---link de las fuentes a utilizar--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">

    <!--Link a font awesome, para los iconos-->
    <script src="https://kit.fontawesome.com/3af059f722.js" crossorigin="anonymous"></script>

    <!--Hoja de estilos css-->
    <link rel="stylesheet" href="<?php base_url();?>public\styles-inicio.css">
    <link rel="stylesheet" href="<?php base_url();?>..\public\styles-inicio.css">
    <link rel="icon" href="<?= base_url('public/img/logo-umc.webp')?>" type="image/x-icon">
  </head>


  
<body>

  <!--Llamado al archivo header que contiene la barra de navegacion-->
  <?php
    include_once "header.php";
  ?>

  <main>

    <!--Cartas de las categorias-->
    <div class="container">
  <section class="text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-8 col-md-8 mx-auto">
        <h1 class="fw-light">
          Bienvenido a UMC Marketplace
          </h1>
          <p class="lead text-body-secondary">En nuestra plataforma podrás encontrar productos de diferentes categorías:</p>

          <!-- Estos son los botones para filtrar las distintas categorías -->
          <div class="btn-group" role="group" aria-label="Basic example">
                <a href="<?= base_url('inicio/1') ?>" class="btn categoria">Comestibles</a>
                <a href="<?= base_url('inicio/2') ?>" class="btn categoria">Entretenimiento</a>
                <a href="<?= base_url('inicio/3') ?>" class="btn categoria">Tecnología</a>
                <a href="<?= base_url('inicio/4') ?>" class="btn categoria">Educación</a>
                <a href="<?= base_url('inicio/5') ?>" class="btn categoria">Vestimenta</a>
                <a href="<?= base_url('inicio/6') ?>" class="btn categoria">Servicios</a>
                <a href="<?= base_url('inicio/7') ?>" class="btn categoria">Residencias</a>
                <a href="<?= base_url('inicio/8') ?>" class="btn categoria">Otros</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Itera sobre cada publicación y muestra las tarjetas -->
  <div class="row" id="publicaciones-container">
    <!-- Aquí se mostrarán las tarjetas de las publicaciones filtradas -->
  </div>
</div>

<script>
  // Obtener el contenedor de las publicaciones
  const publicacionesContainer = document.getElementById('publicaciones-container');

  // Obtener todos los botones de categoría
  const categoriaButtons = document.querySelectorAll('.categoria');

  // Agregar el evento click a cada botón de categoría
  categoriaButtons.forEach(button => {
    button.addEventListener('click', () => {
      const categoriaId = button.dataset.id;

      // Realizar la solicitud AJAX para obtener las publicaciones de la categoría seleccionada

      fetch(`/api/publicaciones?categoria=${categoriaId}`)
        .then(response => response.json())
        .then(data => {
          // Limpiar el contenedor de publicaciones
          publicacionesContainer.innerHTML = '';

          // Iterar sobre las publicaciones y crear las tarjetas correspondientes
          data.forEach(publicacion => {
            const tarjeta = `
              <div class="card" style="width: 18rem;">
                <img src="${publicacion.imagen}" class="card-img-top pic" alt="...">
                <div class="card-body">
                  <h4 class="card-title">${publicacion.titulo}</h4>
                  <h4 class="card-title">${publicacion.descripcion}</h4>
                  <p class="card-text">${publicacion.precio} <i class="fa-solid fa-dollar-sign fa-xl"></i></p>
                  <div class="card-btn text-end">
                    <a href="${publicacion.url}" class="btn btn-primary">Ver publicación</a>
                  </div>
                </div>
              </div>
            `;

            // Agregar la tarjeta al contenedor de publicaciones
            publicacionesContainer.insertAdjacentHTML('beforeend', tarjeta);
          });
        })
        .catch(error => {
          console.error('Error:', error);
        });
    });
  });
</script>


s
      <div class="album">
        <div class="container">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <!-- Aqui es donde van a ir las tarjetas de las publicaciones -->
          <?php
            //print_r($nombre);
            include_once "post-card.php";
          ?> 


        </div>
    </div>

  </main>

  <?php
    include_once "footer.php";
  ?>


  
   <!--Llamado al archivo footer-->
    


    <!--Scripts de js para bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
  </body>

</html>






    
