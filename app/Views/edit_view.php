<!DOCTYPE html>
<html>
<head>
  <title>CRUD</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  

<link rel="stylesheet" href="<?php base_url();?>../public\admin.css">
<link rel="icon" href="<?= base_url('public/img/logo-umc.webp')?>" type="image/x-icon">

</head>
<body>
<div class="container">
    <p><h1>Editar usuarios</h1></p>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
        <form method="post" id="update_user" name="update_user" action="<?= site_url('/update') ?>">
    <input type="hidden" name="id_usuarios" id="id" value="<?php echo $user_obj['id_usuarios']; ?>">

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="<?php echo $user_obj['nombre']; ?>">
    </div>
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="apellido" class="form-control" value="<?php echo $user_obj['apellido']; ?>">
    </div>
    <div class="form-group">
        <label>Cédula</label>
        <input type="text" name="cedula" class="form-control" value="<?php echo $user_obj['cedula']; ?>">
    </div>
    <div class="form-group">
        <label>Usuario</label>
        <input type="text" name="usuario" class="form-control" value="<?php echo $user_obj['usuario']; ?>">
    </div>
    <div class="form-group">
        <label>Teléfono</label>
        <input type="text" name="telefono" class="form-control" value="<?php echo $user_obj['telefono']; ?>">
    </div>
    <div class="form-group">
    <label>Rol</label>
    <select class="form-select select-sm" name="roles" aria-label="Default select example">
        <option selected>Selecciona un rol</option>
        <?php foreach ($roles as $value => $label) { ?>
            <option value="<?php echo $value; ?>" <?php echo ($user_obj['roles'] == $value) ? 'selected' : ''; ?>>
                <?php echo $label; ?>
            </option>
        <?php } ?>
    </select>
</div>



    <div class="form-group">
        <button type="submit" class="btn btn-success btn-block">Guardar Datos</button>
        <a href="<?php echo base_url('admin');?>" class="btn btn-warning">Volver</a>
    </div>
</form>

        </div>
        <div class="col-2"></div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script>
    if ($("#update_user").length > 0) {
      $("#update_user").validate({
            'nombre': {
            rules: 'required',
            errors: {
                required: 'Se necesita tu nombre.'
            }
            },

            'apellido': {
            rules: 'required',
            errors: {
                required: 'Se necesita tu apellido.'
            }
            },

            'cedula': {
            rules: 'required|min_length[7]|max_length[8]|is_unique[usuarios.cedula]|numeric',
            errors: {
                is_unique: 'Esta cédula ya ha sido elegida.',
                numeric: 'La cédula debe ser un número.',
                min_length: 'El campo cédula debe tener al menos 7 caracteres.'
            }
            },

            'usuario': {
            rules: 'required|is_unique[usuarios.usuario]|regex_match[/^' + $_POST['cedula'] + '.+$/]',
            errors: {
                required: 'Se necesita tu usuario.',
                is_unique: 'Este usuario ya ha sido elegido.',
                regex_match: 'El usuario debe comenzar con la cédula.'
            }
            },

            'telefono': {
            rules: 'required|exact_length[11]|is_unique[usuarios.telefono]',
            errors: {
                exact_length: 'El número de teléfono debe tener 11 dígitos',
                is_unique: 'Este número de teléfono ya ha sido elegido.'
            }
            }

      })
    }
  </script>
</body>
</html>