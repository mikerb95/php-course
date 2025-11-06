<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\EmpleadoModel;

class Empleados extends BaseController
{
    public function index()
    {
        $model = new EmpleadoModel();
        $data['empleados'] = $model->findAll();
        return view('empleados/index', $data);
    }

    public function crear()
    {
        return view('empleados/crear');
    }

    public function guardar()
    {
        $model = new EmpleadoModel();
        $model->insert($this->request->getPost());
        return redirect()->to('/empleados');
    }

    public function editar($id)
    {
        $model = new EmpleadoModel();
        $data['empleado'] = $model->find($id);
        return view('/empleados/editar', $data);
    }

    public function actualizar($id)
    {
        $model = new EmpleadoModel();
        $model->update($id, $this->request->getPost());
        return redirect()->to('/empleados');
    }

    public function eliminar($id)
    {
        $model = new EmpleadoModel();
        $model->delete($id);
        return redirect()->to('/empleados');
    }

    {
        public function secretaria()
        {
            return view('pagina/secretaria');
        }

        public function vendedor()
        {
            return view('pagina/vendedor');
        }
    }
}


?>