<?php

namespace App\Controllers;

use App\Models\AbogadoModel;

class Abogado extends BaseController
{
    public function nuevo(): string
    {
        return view('abogado/nuevo_abogado');
    }
}
