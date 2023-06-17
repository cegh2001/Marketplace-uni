<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil usuario</title>

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
    <link rel="stylesheet" href="<?php base_url();?>../public\style-profile.css">
    <link rel="icon" href="<?= base_url('public/img/logo-umc.webp')?>" type="image/x-icon">

	<!-- link al jquery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

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

        
          
            
          </div>

        </div>

      </div>

    </nav>
  </header>


	<!--Cuadro de ajustes del perfil-->
	<section class="my-3">

		<div class="container" style="display: flex;">

			<!-- contenedor general de toda la parte del perfil -->
			<div class="bg-white shadow rounded-lg d-block d-sm-flex contenedor" style="display: flex;">

				<div class="profile-tab-nav border-right">
					<!-- foto de perfil escogiendo avatares -->
					<div class="p-4">
							
						<div class="img-circle text-center mb-3">

							<div id="profile-image-section">
								<!-- <h3>Foto de Perfil:</h3> -->
                                
								<img style="width: 200px;" src="<?php echo $avatarSrc . '?t=' . time(); ?>" alt="Foto de Perfil" id="profile-image">
							</div>

                            <!-- Esto en teoria no hace nada, pero si lo quitan
                            se me jode la vista, asi que como no estorba, no lo toquen KAGBSJKsahgS -->
							<div class="dropdown">
						</div>
					
						<!-- Espacio donde van el nombre y el apellido del usuario -->
						</div>
							<h4 class="nombre-apellido" ><?php echo $usuario['nombre']; ?>  <?php echo $usuario['apellido']; ?></h4>
                            

						</div>

                        <!-- Sistema de raiting -->
                        <!-- Hay que buscar una manera de agregar esto a la base de datos de cada usuario -->
                        <!-- <div class="star-widget text-center" style="justify-content: center;">
                            <input type="radio" name="rate" id="rate-5">
                            <label for="rate-5" class="fas fa-star"></label>

                            <input type="radio" name="rate" id="rate-4">
                            <label for="rate-4" class="fas fa-star"></label>

                            <input type="radio" name="rate" id="rate-3">
                            <label for="rate-3" class="fas fa-star"></label>

                            <input type="radio" name="rate" id="rate-2">
                            <label for="rate-2" class="fas fa-star"></label>

                            <input type="radio" name="rate" id="rate-1">
                            <label for="rate-1" class="fas fa-star"></label>
                        </div> -->

                        <!-- Pequeña bio del usuario -->
                        <div class="form-group" style="margin-left: 5%; margin-right: 5%; margin-bottom: 5%;"">
                        
                        <span id="nombre" class="form-control" style="width: 400px; height: 150px; display: inline-block; overflow: auto; word-wrap: break-word;">
                          <?php echo $usuario['biografia']; ?>
                        </span>

						</div>

                        <!-- En esta seccion iria el promedio del vendedor, solo que no lo pongo porque no
                        se como se va a definir eso -->
                        <!-- <div>
                            <p>
                                Este vendedor tiene un promedio de x estrellas
                            </p>
                        </div> -->
                        
				</div>
                

        <div class="tab-content p-md-5 container-fluid" id="publicaciones-usuario">
                    <div class="tab-pane fade show active">
                        <h3 class="mb-4">
                            <i class="fa-solid fa-shop fa-xl"></i>
                            Publicaciones
                        </h3>
                        <div class="container-fluid mx-auto">
                            <div class="album">
                           
                                <div class="row row-cols-1 row-cols-sm-3 g-3" style="max-width: 100%;">
                                <?php
                                  include_once "post-card.php";
                                ?>

                                </div>
                               


                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!--Llamado al archivo de footer-->
	<!-- <div class="row">
                
                <?php
                      // include_once "post-card2.php";
                    ?> 

              </div> -->

    <!-- Script para el sistema de raiting -->
    <!-- <script>
        // const stars = document.querySelectorAll('.star-widget input');

        // stars.forEach((star, index) => {
        // star.addEventListener('click', () => {
        //     const rating = index + 1;

        //     stars.forEach((star, index) => {
        //     if (index < rating) {
        //         star.checked = true;
        //     } else {
        //         star.checked = false;
        //     }
        //     });
        // });
        // });


    </script> -->


	<!--Scripts de js para bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>
</html>