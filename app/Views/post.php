<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

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
    <link rel="stylesheet" href="<?php base_url();?>../public/style-post.css">
    <link rel="icon" href="<?= base_url('public/img/logo-umc.webp')?>" type="image/x-icon">

	<!-- link al jquery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

 <!--Llamado al archivo header que contiene la barra de navegacion-->
 <header style="position:sticky; top: 0; z-index: 1000;"> 
  <!--Barra de navegacion-->
    <nav class="navbar navbar-dark bg-dark sticky-top" >

      <div class="container-fluid">

        <!--titulo y logo de la barra de navegacion-->
        <a class="navbar-brand title-nav" href= "<?php echo base_url('inicio');?>">
          <img class="logo-nav" src="<?= base_url('public/img/logo-umc.webp')?>" alt="">
          UMC Marketplace
        </a>

        <!--Barra y boton de busqueda-->
        <!-- <nav class="navbar bg-dark busqueda ">
          <div class="container-fluid">

            <form action="<?php echo base_url('/buscar')?>" method="post" class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-light btn-busqueda" type="submit">
                <img class="buscar-logo" src="<?= base_url('public/img/busqueda.svg') ?>" alt="">
              </button>
            </form>

          </div>
        </nav> -->

        
          
            
          </div>

        </div>

      </div>

    </nav>
  </header>

	<!--Cuadro de ajustes del perfil-->
	<section class="my-5">

		<div class="container">
		
			<!-- contenedor general de toda la parte del perfil -->
			<div class="bg-white shadow d-block d-sm-flex contenedor" style="display: flex; border-radius: 10px;">

				<div class="profile-tab-nav border-right">
					<!-- foto de perfil escogiendo avatares -->
					<div class="p-6">
							
							<div class="img-circle text-center mb-3">

								

								<div class="dropdown">
							</div>
							<!-- Espacio donde van el nombre y el apellido del usuario -->
							</div>
						</div>

					<!-- Imagenes del producto -->
          <div id="carouselExampleIndicators" style="max-width:300px;" class="carousel slide" >
          <img src="<?php echo base_url('public/uploads/' . $publicacion['imagen_prod']); ?>" class="card-img-top pic" alt="...">
          </div>
					

				</div>


				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">

					<!-- ajustes del perfil -->
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">

							<h3 class="mb-4">
              <i class="fa-solid fa-basket-shopping fa-xl" style="color: #fff04d;"></i>
                <?= $publicacion['nombre_public'] ?>
              
							</h3>

							<div class="row">

								<div class="product-details">
                  
                  <div class="product-info">

                  <h6>
                      Usuario del vendedor: <?= $usuario['usuario'] ?>
                      <div class="ver">
                          <a href="<?= base_url('profile-user/' . $usuario['usuario']) ?>" class="ver-perfil">
                              <i class="fa-solid fa-users-viewfinder fa-xl" style="color: #95a9f9;"></i>
                              Ver perfil
                          </a>
                      </div>
                  </h6>


                  <h5 class="precio">USD <?= $publicacion['precio'] ?></h5>

                  <div class="like">
                      <button id="likeButton" class="like-button">
                          <i class="fa-solid fa-thumbs-up fa-xl" style="color: #95a9f9;"></i>
                      </button>
                      <span id="likeCount">0</span>
                  </div>

                  <p class="descripcion"><?= $publicacion['descripcion'] ?></p>
                  

                  <div class="contact-info">
                      <p>Número de contacto: <span class="telefono"><?= $usuario['telefono'] ?></span></p>
                  </div>

                 

                  </div>
                </div>


							</div>
							
						</div>




							
								
							

						

					</div>
				</div>
			</div>
		</div>

		
	</section>


	<!--Pie de pagina-->
    <footer class="footer mb-0">
      <small>&copy; 2023 <b>Team LICA</b> - Todos los Derechos Reservados.
        <br>
        <i class="fa-solid fa-handshake fa-xl" ></i>
      </small>
    </footer>

    <script>
  var likeButton = document.getElementById("likeButton");
  var likeCount = document.getElementById("likeCount");
  var count = 0;
  var isLiked = false; // Bandera para controlar el estado del like

  likeButton.addEventListener("click", function() {
    if (isLiked) {
      // Si ya ha dado like, se quita el like
      count--;
      isLiked = false;
    } else {
      // Si no ha dado like, se agrega el like
      count++;
      isLiked = true;
    }
    likeCount.textContent = count;
  });
</script>




	<!--Scripts de js para bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>
</html>

