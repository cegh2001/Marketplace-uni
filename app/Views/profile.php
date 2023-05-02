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
    <link rel="stylesheet" href="<?php base_url();?>public\style-profile.css">

	<!-- link al jquery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </head>

  <body>

  <!--Llamado al archivo header que contiene la barra de navegacion-->
  <?php
    include_once "header.php";
  ?>

	<!--Cuadro de ajustes del perfil-->
	<section class="my-3">

		<div class="container">
			<h1 class="mb-5">
				Ajustes del perfil
			</h1>

			<!-- contenedor general de toda la parte del perfil -->
			<div class="bg-white shadow d-block d-sm-flex contenedor">

				<div class="profile-tab-nav border-right">
					<!-- foto de perfil escogiendo avatares -->
					<div class="p-4">
							
							<div class="img-circle text-center mb-3">

								<div id="profile-image-section">
									<h3>Foto de Perfil:</h3>
									<img src="default-avatar.jpg" alt="Foto de Perfil" id="profile-image">
								</div>

								<div class="dropdown">

									<button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
										Selecciona tu avatar
									</button>

									<div id="avatar-section" class="dropdown-menu text-center">
										<ul id="avatar-list">
											<li><img src="public\img\mujer-1.svg" alt="Avatar 1" class="avatar"></li>
											<li><img src="public\img\mujer-2.svg" alt="Avatar 2" class="avatar"></li>
											<li><img src="public\img\hombre-1.svg" alt="Avatar 3" class="avatar"></li>
											<li><img src="public\img\hombre-2.svg" alt="Avatar 4" class="avatar"></li>
										</ul>
									</div>
								
							</div>
					
							<!-- Espacio donde van el nombre y el apellido del usuario -->
							</div>
							<h4 class="text-center">Nombre y Apellido</h4>
						</div>

					<!-- botones para cambiar entre configuracion de cuenta y de publicaciones -->
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

						<!-- boton para los ajustes de la cuenta -->
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Cuenta
						</a>

						<!-- boton para los ajustes de las publicaciones -->
						<a class="nav-link" id="publication-tab" data-toggle="pill" href="#publication" role="tab" aria-controls="publication" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Publicaciones
						</a>
							
					</div>

				</div>


				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">

					<!-- ajustes del perfil -->
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">

							<h3 class="mb-4">
								<i class="fa-solid fa-gear fa-lg" style="color: #fff04d;"></i>
								Ajustes del perfil
							</h3>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nombre</label>
										<span id="nombre" class="form-control"></span>
										<!-- <input type="text" class="form-control" value="nombre"> -->
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Apellido</label>
										<span id="apellido" class="form-control"></span>
										<!-- <input type="text" class="form-control" value="apellido"> -->
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
										<label>Usuario</label>
										<span id="user" class="form-control"></span>
										<!-- <input type="text" class="form-control" value="UI Developer"> -->
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Bio</label>
										<textarea class="form-control" rows="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore vero enim error similique quia numquam ullam corporis officia odio repellendus aperiam consequatur laudantium porro voluptatibus, itaque laboriosam veritatis voluptatum distinctio!</textarea>
									</div>
								</div>
							</div>
							<div class="mt-5">
								<button class="btn btn-primary save" id="save">Guardar</button>
								<button class="btn btn-light cancel" id="cancel">Cancelar</button>
							</div>
						</div>

						<!-- apartado donde iran las publicaciones del perfil -->
						<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
							<h3 class="mb-4">Password Settings</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Old password</label>
										<input type="password" class="form-control">
									</div>
								</div>

							</div>
								
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>New password</label>
										<input type="password" class="form-control">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Confirm new password</label>
										<input type="password" class="form-control">
									</div>
								</div>
							</div>

							<div>
								<button class="btn btn-primary">Guardar</button>
								<button class="btn btn-light">Cancelar</button>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>

		
	</section>



	<!--Llamado al archivo de footer-->
	<?php
    	include_once "footer.php";
  	?>


	<!-- script para la selecion del avatar de foto de perfil -->
	<script>
		var avatarList = document.getElementById('avatar-list');
		var avatarItems = avatarList.getElementsByTagName('li');
		var profileImage = document.getElementById('profile-image');

		for (var i = 0; i < avatarItems.length; i++) {
			avatarItems[i].addEventListener('click', function() {
			var avatarSrc = this.querySelector('img').getAttribute('src');
			profileImage.setAttribute('src', avatarSrc);
			});
		}

	</script>


	<!-- script para cambiar de botones entre cuenta y publicaciones -->
	<script>
		$(document).ready(function() {
		// Escuchar el evento clic en los enlaces de la lista de botones
		$(".nav-link").on("click", function() {
			// Remover la clase 'active' de todos los enlaces
			$(".nav-link").removeClass("active");
			// Ocultar todos los contenidos de las pestañas
			$(".tab-pane").removeClass("show active");
			
			// Obtener el valor del atributo 'href' del enlace clicado
			var tabId = $(this).attr("href");
			// Agregar la clase 'active' al enlace clicado
			$(this).addClass("active");
			// Mostrar el contenido de la pestaña correspondiente
			$(tabId).addClass("show active");
		});
		});
	</script>



	<!--Scripts de js para bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>
</html>