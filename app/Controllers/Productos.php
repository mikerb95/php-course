<?php
namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {
        return view('producto/productos');
    }

    public function agregar()
    {
        return view('producto/agregar');
    }
}

?>