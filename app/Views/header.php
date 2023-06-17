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

        <!--Boton del menu desplegable a la derecha-->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars fa-lg" style="color: #e6da50;"></i>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">

          <!--Titulo del menu desplegable-->
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
              <i class="fa-solid fa-bars fa-2xl icon" style="color: #e6da50;"></i>
              Menú
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <!--Lista de botones del menu desplegable-->
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

              <!--Boton al perfil del usuario-->
              <li class="nav-item">
                <a class="nav-link" href="profile/<?php echo session('usuario')['usuario']; ?>">
                  <i class="fa-solid fa-user fa-xl icon" style="color: #50b9e6;"></i>
                  Perfil
                </a>
              </li>

              <!--Boton para hacer una publicacion-->
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('postear');?>">
                  <i class="fa-solid fa-upload fa-xl icon" style="color: #50e66e;"></i>
                  Haz una publicación
                </a>
              </li>


              <!--Boton para cerrar sesion-->
                <li class="nav-item active">
                 <a class="nav-link" href="<?php echo base_url();?>/sesion/login">
                  <i class="fa-solid fa-right-from-bracket fa-xl icon" style="color: #e65850;"></i>
                  Cerrar sesión
                </a>
              </li>

              
            </ul>
            
          </div>

        </div>

      </div>

    </nav>
  </header>