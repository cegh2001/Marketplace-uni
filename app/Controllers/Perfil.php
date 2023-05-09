<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Perfil extends BaseController
{
    public function index()
    {
        return view('profile');
    }

    public function account()
    {
        // Obtener los datos del usuario a partir de la sesión
        $usuario = session('usuario')['usuario'];
        $nombre = session('usuario')['nombre'];
        $apellido = session('usuario')['apellido'];

        // Pasar las variables a la vista
        return view('profile', compact('usuario', 'nombre', 'apellido'));
    }

    public function public($usuario)
    {
        // Obtener la información del usuario correspondiente de la base de datos
        $UsuarioModel = new UsuarioModel();
        $usuario = $UsuarioModel->where('usuario', $usuario)->first();

        // Cargar la vista de perfil público y pasar la información del usuario
        return view('profile-user', ['usuario' => $usuario]);
    }
}
