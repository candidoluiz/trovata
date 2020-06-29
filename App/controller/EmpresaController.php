<?php

use App\core\Controller;

class EmpresaController extends Controller
{
  public function index()
  {
    $Empresas = $this->model('Empresa'); // é retornado o model Empresa()
    $data = $Empresas::findAll();
    $this->view('empresa/index', ['empresas' => $data]);
    //$this->view('empresa/index');
  }

}