<?php

namespace App\Models;

use CodeIgniter\Model;

 class UsuarioModel extends Model
 {
     protected $table = 'usuarios';
     protected $primaryKey = 'id';
     protected $allowedFields = ['nombre', 'apellido', 'usuario', 'cedula', 'password'];
 
    // public function obtenerUsuario($data) {
    //     $Usuario = $this->db->table('usuarios');
    //     $Usuario->where($data);
    //     return $Usuario->get()->getResultArray();
    // }
}
//codigo viejo:
//      public function registrarUsuario($datos)
//      {

//          // Insertar en la tabla de usuarios
//          $this->insert($datos);
        
//          // Insertar en la tabla de login
//          $loginData = [
//              'usuario' => $datos['usuario'],
//              'password' => password_hash($datos['password'], PASSWORD_DEFAULT)
//          ];
        
//          // Verificar si ya existe el usuario en la tabla de login
//          $usuarioExistente = $this->db->table('login')
//                                         ->where('usuario', $datos['usuario'])
//                                         ->get()
//                                         ->getRow();
        
//          if (!$usuarioExistente) {
//              // Insertar el nuevo usuario en la tabla de login
//              $this->db->table('login')->insert($loginData);
//          }
        
//          return $this->insertID();
//      }