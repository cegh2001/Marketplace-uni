<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMC Marketplace</title>

    <!-- libreria en teoria de sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!---Libreria Bootstrap--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <!---link de las fuentes a utilizar--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">

    <!--LINK PARA UTILIZAR JQUERY-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!--link a la pagina de estilos-->
    <link rel="stylesheet" href="<?php base_url();?>public\style-login-register.css">
    <link rel="icon" href="<?= base_url('public/img/logo-umc.webp')?>" type="image/x-icon">

</head>

<body>

    <div class="container center-content">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="titulo" >
                <div class="logo">
                    <img class="imagen" src="<?php base_url(); ?>public\img\logo-umc.webp" alt="logo-umc">
                </div>
                <h1 class="title">UMC Marketplace</h1>
            </div>

        
            <div class="intro">
            <p class="texto">
                Bienvenido al mercado online especializado para la Universidad 
                Marítima del Caribe. <br> Un espacio donde nuestra comunidad UMCista tiene la
                oportunidad de compartir <br> todo tipo de servicios o productos que tengan en 
                venta! 
            </p>
            
            </div>
        
            <div class="formulario">
               
                <img src="" alt="" srcset="umc-logo">
                <form  class="login-form" method = "post" action="<?php echo base_url('login');?>">

            

                    <input class="campo" id="usuario" name="usuario" type="text" placeholder="Usuario" required>
                    <input class="campo" id="password" name="password" type="password" placeholder="Contraseña" required>

                    <input class="boton" type="submit" name="boton" id="boton" value="¡Inicia sesión!">
 
                    <p class="texto">¿Aún no estas registrado?</p>
                    <a class="boton" href="http://localhost/Proyecto-Uni/register">¡Regístrate!</a>
                    
                </form>

            </div>

        </div>

    <!--Llamado al archivo footer-->
    <?php
      include_once"footer.php";
    ?>
    </div>
    


    <!-- Alerta de exito y error de sweetalert2 -->
    <?php if(session()->getFlashdata('alert')): ?>
    <script>
        const alertData = <?= json_encode(session()->getFlashdata('alert')) ?>;
        Swal.fire({
            icon: 'success',
            title: 'Felicitaciones!',
            text: alertData.alert_message
        });
    </script>
<?php endif; ?>


    <?php if(session()->getFlashdata('Error')): ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Ha habido un problema..',
            text: '<?= session()->getFlashdata('Error') ?>'
        });
    </script>
    <?php endif; ?>



    <!--Scripts de js para bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>

</html>