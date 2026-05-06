<?php

namespace App\Controllers;

use App\Models\AbogadoModel;

class Home extends BaseController

{
    public function inde(): string
    {
        $alumnoModel = new AbogadoModel();
        $data = array("todos" => $alumnoModel->findAll());
        return view('abogados', $data);
    }

    public function perfil()
    {
        $abogadoModel = new \App\Models\AbogadoModel();
        $data['todos'] = $abogadoModel->findAll();

        return view('perfiles', $data);
    }

    public function index(): string
    {
        return view('logon');
    }

     public function login(): string
    {
        return view('login');
    }
}
