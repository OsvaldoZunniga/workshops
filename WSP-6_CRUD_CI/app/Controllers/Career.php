<?php

namespace App\Controllers;

use App\Models\CareerModel;

class Career extends BaseController
{
    protected $careerModel;

    public function __construct()
    {
        $this->careerModel = new CareerModel();
    }

    // Mostrar lista de carreras
    public function index()
    {
        $data['careers'] = $this->careerModel->findAll();
        return view('careers/index', $data);
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('careers/create');
    }

    // Procesar creación de carrera
    public function store()
    {
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'codigo' => $this->request->getPost('codigo')
            
        ];

        if ($this->careerModel->insert($data)) {
            session()->setFlashdata('success', 'Carrera creada exitosamente');
            return redirect()->to('/careers');
        } else {
            session()->setFlashdata('errors', $this->careerModel->errors());
            return redirect()->back()->withInput();
        }
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $data['career'] = $this->careerModel->find($id);
        
        if (empty($data['career'])) {
            session()->setFlashdata('error', 'Carrera no encontrada');
            return redirect()->to('/careers');
        }

        return view('careers/edit', $data);
    }

    // Procesar actualización de carrera
    public function update($id)
    {
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'codigo' => $this->request->getPost('codigo')  
        ];

        if ($this->careerModel->update($id, $data)) {
            session()->setFlashdata('success', 'Carrera actualizada exitosamente');
            return redirect()->to('/careers');
        } else {
            session()->setFlashdata('errors', $this->careerModel->errors());
            return redirect()->back()->withInput();
        }
    }

    // Eliminar carrera
    public function delete($id)
    {
        // Verificar si hay estudiantes asociados
        $studentModel = new \App\Models\StudentModel();
        $studentsCount = $studentModel->where('fk_career', $id)->countAllResults();

        if ($studentsCount > 0) {
            session()->setFlashdata('error', 'No se puede eliminar la carrera porque tiene estudiantes asociados');
            return redirect()->to('/careers');
        }

        if ($this->careerModel->delete($id)) {
            session()->setFlashdata('success', 'Carrera eliminada exitosamente');
        } else {
            session()->setFlashdata('error', 'Error al eliminar la carrera');
        }

        return redirect()->to('/careers');
    }
}