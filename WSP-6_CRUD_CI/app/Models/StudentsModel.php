<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class StudentsModel extends Model{
        protected $table = 'estudiantes';
        protected $primaryKey = 'id';
        protected $allowedFields = ['nombre', 'apellido', 'edad'];
    }

?>