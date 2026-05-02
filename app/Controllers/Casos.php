<?php

namespace App\Controllers;

use App\Models\CasosModel;

class Casos extends BaseController
{
    public function caso(): string
    {
        $casosModel = new CasosModel();
        $data = array("todos" => $casosModel->findAll());
        return view('Casos', $data);
    }

    public function iron(): string
    {
        return view('casos/caso_nuevo');
    }
}
