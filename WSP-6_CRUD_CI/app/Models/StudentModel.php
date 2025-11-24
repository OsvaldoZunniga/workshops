<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table      = 'estudiantes';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'apellido', 'edad', 'fk_career'];
    protected $useTimestamps = false;
    
    // Método para obtener estudiantes con información de carrera
    public function getStudentsWithCareers()
    {
        return $this->select('estudiantes.*, carreras.nombre as career_name')
                    ->join('carreras', 'carreras.id = estudiantes.fk_career', 'left')
                    ->findAll();
    }

    // Método para obtener un estudiante con su carrera
    public function getStudentWithCareer($id)
    {
        return $this->select('estudiantes.*, carreras.nombre as career_name')
                    ->join('carreras', 'carreras.id = estudiantes.fk_career', 'left')
                    ->find($id);
    }
}
