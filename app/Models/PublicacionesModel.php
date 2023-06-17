<?php

namespace App\Models;

use CodeIgniter\Model;

class PublicacionesModel extends Model
{
    protected $table = 'publicaciones';
    protected $primaryKey = 'id_publicaciones';
    protected $allowedFields = ['id_categorias', 'id_perfiles', 'id_usuarios', 'nombre_public', 'precio', 'descripcion', 'imagen_prod', 'likes', 'fecha_publicacion'];

}
