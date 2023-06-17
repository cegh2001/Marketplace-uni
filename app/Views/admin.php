<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CRUD</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="icon" href="<?= base_url('public/img/logo-umc.webp')?>" type="image/x-icon">

  <!--Hoja de estilos css-->
  <link rel="stylesheet" href="<?php echo base_url();?>public\admin.css">

</head>
<body>
<div class="container mt-4">
    <p><h1>CRUD usuarios >:3</h1></p>
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/user-form') ?>" class="btn btn-success mb-2">Crear usuario</a>
    </div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>

    <a href="<?php echo base_url('inicio');?>" class="btn btn-warning" style="margin-bottom: 10px;">Inicio</a>
    
    
    <table class="table table-bordered table-striped" id="users-list">
       <thead>
          <tr>
             <th>Id del usuario</th>
             <th>Nombre</th>
             <th>Apellido</th>
             <th>Cedula</th>
             <th>Usuario</th>
             <th>Telefono</th>
             <th>Roles</th>
             <th>Accion</th>
             <th>Publicaciones</th>
          </tr>
       </thead>
       <tbody>
          <?php if($usuario): ?>
          <?php foreach($usuario as $usuario): ?>
          <tr>
             <td><?php echo $usuario['id_usuarios']; ?></td>
             <td><?php echo $usuario['nombre']; ?></td>
             <td><?php echo $usuario['apellido']; ?></td>
             <td><?php echo $usuario['cedula']; ?></td>
             <td><?php echo $usuario['usuario']; ?></td>
             <td><?php echo $usuario['telefono']; ?></td>
             <td><?php echo $usuario['roles']; ?></td>
             
             <td>
                <a href="<?php echo base_url('delete/'.$usuario['id_usuarios']);?>" class="btn btn-danger btn-sm" style="margin-bottom: 10px;">
                    Borrar
                </a>
                <a href="<?php echo base_url('edit-view/'.$usuario['id_usuarios']);?>" class="btn btn-success btn-sm" style="margin-bottom: 10px;">
                    Editar
                </a>
             </td>

             <td>
                <a href="#" class="btn btn-info btn-sm">
                    Publicaciones
                </a>

             </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
    </table>
    <style>
  .collapse-content {
    display: none;
  }
</style>

<button class="btn btn-light btn-collapse" onclick="toggleCollapse()">
  <i class="fa-solid fa-circle-info fa-xl" style="color: #0000;"></i>
  Roles
</button>

<div id="collapseContent" class="collapse-content">
  <div class="card card-body politicas-parrafo">
    Rol 1: Super-Usuario<br>
    Rol 0: Usuario normal
  </div>
</div>

<script>
  function toggleCollapse() {
    var collapseContent = document.getElementById("collapseContent");
    if (collapseContent.style.display === "none") {
      collapseContent.style.display = "block";
    } else {
      collapseContent.style.display = "none";
    }
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>
</body>
</html>