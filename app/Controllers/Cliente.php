<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class Cliente extends BaseController
{
    public function clin(): string
    {
        $clienteModel = new ClienteModel();
        $data = array("todos" => $clienteModel->findAll());
        return view('Cliente', $data);
    }
    public function nuevo(): string
    {
        return view('cliente/nuevo_cliente');
    }

        public function guardar()
    {
        $clienteModel = new ClienteModel();
        $data = array(
            'nombre' => $this->request->getPost('nombres'),
            'apellido' => $this->request->getPost('apellidos'),
            'dui' => $this->request->getPost('dui'),
            'telefono' => $this->request->getPost('telefono'),
            'direccion' => $this->request->getPost('direccion'),
            'correo' => $this->request->getPost('correo'),
        );
        $clienteModel->insert($data);
        return redirect()->to('cliente/clin');
    }
}
