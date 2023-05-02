<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <!---Libreria Bootstrap--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <!-- libreria en teoria de sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!---link de las fuentes a utilizar--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">

    <!-- Link al jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--link a la pagina de estilos-->
    <link rel="stylesheet" href="<?php base_url();?>public\style-login-register.css">

    <!--Link a font awesome, para los iconos-->
    <script src="https://kit.fontawesome.com/3af059f722.js" crossorigin="anonymous"></script>

</head>


<body>
         
    <div class="container">
        
        <div class="col-sm-12 col-md-12 col-lg-12">

            <div class="formulario">
                    
                <!--Titulo del formulario de registro-->
                <h1 class="title-registro">¡Regístrate!</h1>
                
                <form class="register-form" id="form" method="post" action=<?php base_url("register");?>>

                    <!--Campos del formulario de registro-->
                
                        <input class="campo" id="nombre" name="nombre" type="text" placeholder="Nombre" required>

                        <input class="campo" id="apellido" name="apellido" type="text" placeholder="Apellido" required>

                        <input class="campo" id="cedula" name="cedula" type="number" placeholder="Cédula" required>

                        <input class="campo" id="usuario" name="usuario" type="text" placeholder="Usuario" required>
                             <!--Boton de como crear el usuario-->
                    <div class="boton-usuario">
                        <p>
                            <button class="btn btn-usuario" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                            <i class="fa-solid fa-circle-info fa-xl" style="color: #ffffff;"></i>
                            Como crear tu usuario
                            </button>
                        </p>

                        <div class="collapse " id="collapseExample1">
                            
                            <!--Parrafo con la info de como crear el usuario-->
                            <div class="card card-body politicas-parrafo">
                            Tu usuario debe iniciar con la cédula que registraste, por ejemplo: Si registraste
                            la cedula 12345678 tu usuario seria así 12345678usuario
                            </div>

                        </div>
                    </div>

                        <input class="campo" id="password" name="password" type="password" placeholder="Contraseña" aria-labelledby="passwordHelpBlock" required>
                        <span id="passwordHelpInline" class="form-text" style="margin-left: 12%;">
                            Debe ser entre 8-20 caracteres de largo.
                        </span>


                    <!--Texto para pedir registro de inscripcion o trabajo-->
                    <!-- <p class="texto text-confirmacion">
                        Para confirmar que perteneces a nuestra comunidad, por favor
                        adjunta aquí tu constancia de estudio o de trabajo, dependiendo del
                        caso. <br>
                        Puedes encontrarlo iniciando sesión en la zona de estudiantes  o trabajadores
                        de la página de la universidad.
                    </p> -->
                    
                    <!--Boton para subir un archivo-->
                    <!-- <div class="boton-subida">

                            <input type="file" id="file" class="boton-subida-input" required>

                        <label class="btn-archivo" for="file">
                            <div class="boton-subida-icon">
                                <img src="imagenes/icon-subida.svg" alt="">
                            </div>
                            <i class="logo-subida fa-solid fa-arrow-up-from-bracket fa-xl" style="color: #fafcff;"></i>
                            Subir archivo
                        </label>
                       
                    </div> -->

                
                    <!--Boton desplegable de politicas de uso-->
                    <div class="boton-politicas">
                        <p>
                            <button class="btn btn-politicas" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Politicas de uso
                            </button>
                        </p>

                        <div class="collapse " id="collapseExample">
                            
                            <!--Parrafo con las politicas y terminos de la empresa-->
                            <div class="card card-body politicas-parrafo">
                                
                                <h3>POLITICAS DE USO</h3>

                                <ul>

                                    <li>
                                        Es un espacio seguro y amigable, por lo que no se permitiran 
                                        publicaciones que contengan los siguientes elementos: Lenguaje 
                                        inapropiado, contenido +18, publicidad engañosa, productos en mal 
                                        estado, entre otros.
                                    </li>

                                    <li>
                                        Debes formar parte de la comunidad UMCista, ya sea como 
                                        profesor o estudiante.
                                    </li>

                                </ul>

                                <h3>TERMINOS Y CONDICIONES</h3>
                                
                                <ul>

                                    <li>
                                        Se deben respetar los derechos de autor y propiedad intelectual.
                                        No se permiten publicaciones que infrinjan los derechos de terceros.
                                    </li>
                                    
                                    <li>
                                        UMC Marketplace no se hace responsable por las transacciones realizadas entre vendedores y compradores. 
                                        Es responsabilidad de los usuarios verificar la calidad y autenticidad de los productos ofrecidos y 
                                        acordar los términos de la transacción.
                                    </li>

                                    <li>
                                        Se recomienda utilizar métodos de pago seguros y confiables, como transferencias bancarias o 
                                        plataformas de pago en línea.
                                    </li>

                                    <li>
                                        UMC Marketplace se reserva el derecho de eliminar publicaciones que infrinjan las políticas 
                                        establecidas o que sean consideradas inapropiadas o ilegales.
                                    </li>

                                    <li>
                                        Los usuarios deben mantener un comportamiento respetuoso y ético en sus interacciones 
                                        en la plataforma. Se prohíbe cualquier tipo de discriminación, acoso o intimidación hacia otros usuarios.
                                    </li>

                                    <li>
                                        UMC Marketplace se compromete a proteger la privacidad de los usuarios y no compartirá información 
                                        personal sin su consentimiento. Sin embargo, se puede recopilar información para mejorar la experiencia 
                                        de los usuarios y garantizar la seguridad de la plataforma.
                                    </li>

                                    <li>
                                        Los usuarios deben notificar cualquier actividad sospechosa o infracción a las políticas de UMC 
                                        Marketplace para proteger la integridad y seguridad de la plataforma.
                                    </li>

                                </ul>
                                    
                            </div>

                        </div>

                    </div>

                    <!--Boton de aceptar las politicas de uso-->
                    <div class="form-check">

                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>

                        
                        <label class="form-check-label" for="flexCheckDefault">
                          Acepto las políticas de UMC Marketplace
                        </label>

                    </div>

                    <!--Botones de registro o redireccion a inicio de sesion-->
                    <input class="boton" type="submit" name="boton" id="boton" value="¡Regístrate!">
                    
                    <p class="texto">¿Ya tienes una cuenta?</p>
                    
                    <a class="boton" href="http://localhost/Proyecto-Uni/login">¡Inicia sesión!</a>
                    
                </form> 

            </div>

        </div>

        <!--Pie de pagina-->
        <footer class="footer">
            <small>&copy; 2023 <b>Team LICA</b> - Todos los Derechos Reservados.</small>
        </footer>

    </div>

    <!-- alertas de exito y fallo -->
    <?php if(session()->getFlashdata('Exito')): ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Felicitaciones!',
            text: '<?= session()->getFlashdata('Exito') ?>'
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