<?php

namespace App\Models;

use CodeIgniter\Model;

class AbogadoModel extends Model
{
    protected $table = 'abogados';
    protected $primaryKey = 'id_abogado';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['nombres', 'apellidos', 'correo', 'contraseña', 'telefono', 'especialidad', 'fecha_registro'];
}
