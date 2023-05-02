<?php

namespace App\Controllers;

class inicio extends BaseController
{
    public function Principal()
    {
        return view('inicio');
    }
    public function perfil(){

        return view('profile');
    }

    public function perfilUser(){

        return view('profile-user');
    }
}