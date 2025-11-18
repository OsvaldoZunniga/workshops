<?php
    namespace App\Controllers;
    use App\Models\StudentsModel;
    
    class Students extends BaseController{
        public function index(){
            $model = new StudentsModel();
            $data['students'] = $model->findAll();
            return view('students/index', $data);
        }
        public function create(){
            return view('students/create');
        }

        public function store(){
            $model = new StudentsModel();
            $data = [
                'nombre' => $this->request->getPost('name'),
                'apellido' => $this->request->getPost('last_name'),
                'edad' => $this->request->getPost('age'),
            ];
            $model->insert($data);
            return redirect()->to('/students');
        }
    }
?>