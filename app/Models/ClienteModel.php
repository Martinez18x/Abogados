<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['nombre', 'apellido', 'dui', 'telefono', 'direccion', 'correo'];
}
