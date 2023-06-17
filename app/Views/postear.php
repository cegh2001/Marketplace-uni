<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar</title>

    <!---Libreria Bootstrap--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <!-- libreria de sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!---link de las fuentes a utilizar--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">

    <!-- Link al jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--link a la pagina de estilos-->
    <link rel="stylesheet" href="<?php base_url();?>public\style-postear.css">
    <link rel="icon" href="<?= base_url('public/img/logo-umc.webp')?>" type="image/x-icon">

    <!--Link a font awesome, para los iconos-->
    <script src="https://kit.fontawesome.com/3af059f722.js" crossorigin="anonymous"></script>
</head>



<body>

  <!--Llamado al archivo header que contiene la barra de navegacion-->
  <?php
    include_once "header.php";
  ?>

  <!-- Formulario para subir una publicacion -->
  <div class="container">
        
    <div class="col-sm-12 col-md-12 col-lg-12">

      <div class="formulario">
                    
        <!--Titulo del formulario de registro-->
        <h1 class="title-registro">¡Haz una publicación!</h1>
                
        <form class="register-form" id="form" method="post" action=<?php echo base_url("postear"); ?> enctype="multipart/form-data">
        <!-- Mostrar errores de validación -->
        <?php if (session()->has('errors')) : ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php foreach (session('errors') as $error) : ?>
                                <li><?php echo $error ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif;?> 
          <!--Campos del formulario de registro-->
          
          <div class="campos-producto" >
            <label for="nombre-producto" class="label">Nombre del producto:</label>
            <input class="campo" id="nombre-producto" name="nombre-producto" type="text" placeholder="Nombre del producto" required>
          </div>
          

          <div class="campos-producto">
            <label for="precio-producto" class="label">Precio del producto:</label>
            <div class="campo-precio" style="display: flex; align-items: center;">
              <input class="precio-producto" id="precio-producto" name="precio-producto" type="number" placeholder="Precio del producto" required>
              <i class="fa-solid fa-dollar-sign fa-xl dolar" style="color: #ffffff;"></i>
            </div>
          </div>

          <div class="campos-producto">
            <label for="descripcion-producto" class="label">Descripción del producto:</label>
            <textarea class=" descripcion-producto" id="descripcion-producto" type="input" name="descripcion-producto" required placeholder="Describe brevemente el producto que ofreces, por favor, se lo más detallado posible"></textarea>
          </div>

        <div class="campos-producto">
            <label for="categoria-producto" class="label">Tipo de producto:</label>
            <select class="form-select campo" id="categoria-producto" name = "categoriaId" aria-label="Default select example">
              <option selected class="selecionar">Selecciona una categoría:</option>
              <option data-id="1" value="1">Comestibles</option>
              <option data-id="2" value="2">Entretenimiento</option>
              <option data-id="3" value="3">Tecnología</option>
              <option data-id="4" value="4">Educación</option>
              <option data-id="5" value="5">Vestimenta</option>
              <option data-id="6" value="6">Servicios</option>
              <option data-id="7" value="7">Residencias</option>
              <option data-id="8" value="8">Otros</option>
          </select>
        </div>


          <!--Boton para subir un archivo-->
          <section id="images" class="images-cards">

            <label for="categoria-producto" class="label">Fotos del producto:  </label>
            <br>

            <div class="imagenes col-lg-8" id="add-photo-container" style="margin: auto;">

              <div class="add-new-photo first" id="add-photo">
                <span><i class="logo-subida fa-solid fa-images fa-xl" style="color: #fafcff; padding-right: 5px;"></i></span>
              </div>

              <input type="file" multiple id="add-new-photo" name="images">
              
            </div>

            <p style="margin-left: 12%;">Por favor colocar solo una imagen</p>
          </section>

          
          <!--Boton de Publicar-->
          <input class="boton" type="submit" name="boton" id="boton" value="¡Publicar!">
                            
        </form> 

      </div>

    </div>


    





















  



    <!--Llamado al archivo footer-->
    <?php
      include_once"footer.php";
    ?>

  </div>


  <!-- script para tener una vista previa de las imagenes a subir -->
  <script>

          $(document).ready(function(){

    // Modal

    $(".modal").on("click", function (e) {
        console.log(e);
        if (($(e.target).hasClass("modal-main") || $(e.target).hasClass("close-modal")) && $("#loading").css("display") == "none") {
            closeModal();
        }
    });

    // -> Modal

    // Abrir el inspector de archivos

    $(document).on("click", "#add-photo", function(){
        $("#add-new-photo").click();
    });

    // -> Abrir el inspector de archivos

    // Cachamos el evento change

    $(document).on("change", "#add-new-photo", function () {

        console.log(this.files);
        var files = this.files;
        var element;
        var supportedImages = ["image/jpeg", "image/png", "image/gif"];
        var seEncontraronElementoNoValidos = false;

        for (var i = 0; i < files.length; i++) {
            element = files[i];
            
            if (supportedImages.indexOf(element.type) != -1) {
                createPreview(element);
            }
            else {
                seEncontraronElementoNoValidos = true;
            }
        }

        if (seEncontraronElementoNoValidos) {
            showMessage("Se encontraron archivos no validos.");
        }
        else {
            showMessage("Todos los archivos se subieron correctamente.");
        }

    });

    // -> Cachamos el evento change

    // Eliminar previsualizaciones

    $(document).on("click", "#Images .image-container", function(e){
        $(this).parent().remove();
    });

    // -> Eliminar previsualizaciones

    });

  </script> 

  <script>
      //Genera las previsualizaciones
    function createPreview(file) {
        var imgCodified = URL.createObjectURL(file);
        var img = $('<div class="imagenes col-lg-8" style="margin: auto;"><div class="image-container"> <figure> <img src="' + imgCodified + '" alt="Foto del usuario"> <figcaption> <i class="fa-regular fa-circle-xmark fa-xl" style="color: #000f29;"></i> </figcaption> </figure> </div></div>');
        $(img).insertBefore("#add-photo-container");
  }
  </script>

  <script>
    function showModal(card) {
  $("#" + card).show();
  $(".modal").addClass("show");
}

function closeModal() {
  $(".modal").removeClass("show");
  setTimeout(function () {
    $(".modal .modal-card").hide();
  }, 300);
}

function loading(status, tag) {
  if (status) {
    $("#loading .tag").text(tag);
    showModal("loading");
  }
  else {
    closeModal();
  }
}

function showMessage(message) {
  $("#Message .tag").text(message);
  showModal("Message");
}
  </script>



  <!--Scripts de js para bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

</body>
</html>