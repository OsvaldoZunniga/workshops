<?php

namespace App\Models;

use CodeIgniter\Model;

class CareerModel extends Model
{
    protected $table      = 'carreras';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'codigo'];
    protected $useTimestamps = false;


}
