<?php

namespace App\Controllers;

class inicio extends BaseController
{
    public function index()
    {
        return view('inicio.html');
    }
}