<?php
namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM producto");
        // $resultado = $query->getResult();
        $data['productos'] = $query->getResult();

        return view('producto/productos');
    }

    public function agregar()
    {
        return view('producto/agregar');
    }
}

?>