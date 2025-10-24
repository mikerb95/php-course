<?php
namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        return view('producto/productos');
    }

    public function agregar()
    {
        return view('producto/agregar');
    }
}

?>