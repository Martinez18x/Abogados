<?php

namespace App\Controllers;

use App\Models\AbogadoModel;

class Abogado extends BaseController
{
    public function nuevo(): string
    {
        return view('abogado/nuevo_abogado');
    }

    public function guardar()
    {
        $abogadoModel = new AbogadoModel();
        $data = array(
            'nombres' => $this->request->getPost('nombres'),
            'apellidos' => $this->request->getPost('apellidos'),
            'correo' => $this->request->getPost('correo'),
            'contraseña' => $this->request->getPost('contraseña'),
            'telefono' => $this->request->getPost('celular'),
            'especialidad' => $this->request->getPost('especialidad'),
        );
        $abogadoModel->insert($data);
        return redirect()->to('home/index');
    }

}
