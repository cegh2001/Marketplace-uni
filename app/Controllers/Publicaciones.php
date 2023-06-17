<?php

namespace App\Controllers;
use App\Models\PublicacionesModel;

class publicaciones extends BaseController
{

    // public function indexinicio()
    // {
    //     $publicacionModel = new PublicacionesModel();
    //     $publicaciones = $publicacionModel->findAll();

    //     $data['publicaciones'] = $publicaciones;

    //     return view('inicio', $data);
    // }

    // public function indexprofile()
    // {
    //     $publicacionModel = new PublicacionesModel();
    //     $publicaciones = $publicacionModel->findAll();

    //     $data['publicaciones'] = $publicaciones;

    //     return view('profile', $data);
    // }

    // public function indexprofileu()
    // {
    //     $publicacionModel = new PublicacionesModel();
    //     $publicaciones = $publicacionModel->findAll();

    //     $data['publicaciones'] = $publicaciones;

    //     return view('profile-user', $data);
    // }

    // public function indexpost()
    // {
    //     $publicacionModel = new PublicacionesModel();
    //     $publicaciones = $publicacionModel->findAll();

    //     $data['publicaciones'] = $publicaciones;

    //     return view('post', $data);
    // }


    public function post()
    {
        return view('post');
    }
}