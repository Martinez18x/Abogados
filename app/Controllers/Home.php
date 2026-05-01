<?php

namespace App\Controllers;

use App\Models\AbogadoModel;

class Home extends BaseController

{
    public function index(): string
    {
        $alumnoModel = new AbogadoModel();
        $data = array("todos" => $alumnoModel->findAll());
        return view('abogados', $data);
    }
}
