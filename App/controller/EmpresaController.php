<?php

use App\core\Controller;

class EmpresaController extends Controller
{
  public function index()
  {
	//session_start();

    $Empresas = $this->model('Empresa'); // é retornado o model Empresa()
    $data = $Empresas::findAll();
    

   // if (!isset($_SESSION['empresa'])) 
   // {
    	$this->view('empresa/index', ['empresas' => $data]);
   // }
    //else
   // {
    	//header("Location: /produto/lista");
   // }
  }

  public function fechar()
  {
    Session_start();
    Session_destroy();
    header("Location: /empresa/index");
  }

}