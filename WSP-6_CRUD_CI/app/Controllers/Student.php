<?php

namespace App\Controllers;

use App\Models\StudentModel;
use App\Models\CareerModel;

class Student extends BaseController
{
    protected $studentModel;
    protected $careerModel;

    public function __construct()
    {
        $this->studentModel = new StudentModel();
        $this->careerModel = new CareerModel();
    }

    
    public function index()
    {
        $data['students'] = $this->studentModel->getStudentsWithCareers();
        return view('students/index', $data);
    }

    
    public function create()
    {
        $data['careers'] = $this->careerModel->findAll();
        return view('students/create', $data);
    }

    
    public function store()
    {
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'edad' => $this->request->getPost('edad'),
            'fk_career' => $this->request->getPost('fk_career')
        ];
        if ($this->studentModel->insert($data)) {
            session()->setFlashdata('success', 'Estudiante creado exitosamente');
            return redirect()->to('/students');
        } else {
            session()->setFlashdata('errors', $this->studentModel->errors());
            return redirect()->back()->withInput();
        }
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $data['student'] = $this->studentModel->find($id);
        $data['careers'] = $this->careerModel->findAll();
        
        if (empty($data['student'])) {
            session()->setFlashdata('error', 'Estudiante no encontrado');
            return redirect()->to('/students');
        }

        return view('students/edit', $data);
    }

    // Procesar actualización de estudiante
    public function update($id)
    {
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'edad' => $this->request->getPost('edad'),
            'fk_career' => $this->request->getPost('fk_career')
        ];

        if ($this->studentModel->update($id, $data)) {
            session()->setFlashdata('success', 'Estudiante actualizado exitosamente');
            return redirect()->to('/students');
        } else {
            session()->setFlashdata('errors', $this->studentModel->errors());
            return redirect()->back()->withInput();
        }
    }

    // Eliminar estudiante
    public function delete($id)
    {
        if ($this->studentModel->delete($id)) {
            session()->setFlashdata('success', 'Estudiante eliminado exitosamente');
        } else {
            session()->setFlashdata('error', 'Error al eliminar el estudiante');
        }

        return redirect()->to('/students');
    }
}
