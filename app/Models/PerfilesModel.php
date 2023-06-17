<?php

namespace App\Models;

use CodeIgniter\Model;

class PerfilesModel extends Model
{
    protected $table = 'perfiles';
    protected $primaryKey = 'id_perfiles';
    protected $allowedFields = ['id_usuarios'];

    // public function obtenerIdUsuarios($condicion)
    // {
    //     $this->select('id_usuarios');
    //     $this->join('usuarios', 'usuarios.id = perfiles.id_usuarios');
    //     $this->where('condicion', $condicion);

    //     $query = $this->get();
    //     $resultados = $query->getResult();

    //     $idUsuarios = [];

    //     foreach ($resultados as $row) {
    //         $idUsuarios[] = $row->id_usuarios;
    //     }

    //     return $idUsuarios;
    // }
}
