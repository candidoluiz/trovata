<?php

use App\core\Controller;

class ProdutoController extends Controller
{
  public function lista()
  {  
    session_start();

    if (!isset($_SESSION['empresa'])) {
     $_SESSION['empresa']=$_POST['emp'];
    }

    //$empresaId = $_POST['emp'];
    
    $Produtos = $this->model('Produto'); // é retornado o model Produto()
    $data = $Produtos::findAllByEmpresaId($_SESSION['empresa']);
    $this->view('produto/index', ['produtos' => $data]);
  }

  public function novo()
  {
    $this->verificarSession();

    $GrupoProdutos = $this->model('GrupoProduto');
    $data = $GrupoProdutos::findAll();
    $this->view('produto/novo', ['grupoProdutos' => $data]);
  }

  public function editar($produto)
  {
     $this->verificarSession();

    $Produtos = $this->model('Produto');
    $data = $Produtos::findById($produto);
    $this->view('produto/editar', ['produto' => $data]);

  }

  private function verificarSession()
  {
     session_start();
    if (!isset($_SESSION['empresa'])) 
    {
      header("Location: /empresa/index");
    }

  }

}