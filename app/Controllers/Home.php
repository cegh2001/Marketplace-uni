<?php

namespace App\Controllers;

class home extends BaseController
{
    public function index()
    {
        return view('login');
    }
}
