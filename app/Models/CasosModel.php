<?php

namespace App\Models;

use CodeIgniter\Model;

class CasosModel extends Model
{
    protected $table = 'casos';
    protected $primaryKey = 'id_caso';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['titulo', 'descripcion', 'estado', 'telefono', 'fecha_inicio', 'fecha_fin', 'id_cliente'];
}
