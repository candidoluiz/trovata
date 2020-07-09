<?php

use App\core\Controller;

class ProdutoController extends Controller
{
  function __construct()
  {
    session_start();

    if (isset($_POST['emp'])) {
      $_SESSION['empresa']=$_POST['emp'];
    }
    if (!isset($_SESSION['empresa'])) {
       header("Location: /empresa/index");
    }
  }
  public function lista()
  {  /*
    session_start();

    if (!isset($_SESSION['empresa'])) {
     $_SESSION['empresa']=$_POST['emp'];
    }
    //$empresaId = $_POST['emp'];
    */
    $Produtos = $this->model('Produto'); // é retornado o model Produto()
    $data = $Produtos::findAllByEmpresaId($_SESSION['empresa']);
    $this->view('produto/index', ['produtos' => $data]);
  }

  public function novo()
  {
    //$this->verificarSession();

    $GrupoProdutos = $this->model('GrupoProduto');
    $data = $GrupoProdutos::findAll();
    $this->view('produto/novo', ['grupoProdutos' => $data]);
  }

  public function editar($id)
  {
     //$this->verificarSession();
     //$produto = $_POST;

    $Produtos = $this->model('Produto');
    $GrupoProdutos = $this->model('GrupoProduto');
    $data['produto'] = $Produtos::findById($id);
    $data['todos'] = $GrupoProdutos::findAll();
/*
    foreach ($data['todos'] as  $value) {
     print_r($value['DESCRICAO_GRUPO_PRODUTO']);
    }
*/
    $this->view('produto/editar', [$data]);
     //header("Location: /produto/lista");

  }

  public function gravar()
  {
    //$this->verificarSession();
    $produto = $_POST;
    $produto['empresa'] = $_SESSION['empresa'];
    $Produto = $this->model('Produto');
    $Produto::insert($produto);
    //$data = $Produto::findAllByEmpresaId($produto['empresa']);

     header("Location: /produto/lista");

  }

  public function update($id)
  {
     $produto = $_POST;
     $Produto = $this->model('Produto');
     $Produto::update($id, $produto);
     header("Location: /produto/lista");
  }

  public function delete($id)
  {
    $Produto = $this->model('Produto');
    $Produto::delete($id);
    header("Location: /produto/lista");
  }
/*
  private function verificarSession()
  {
     session_start();
    if (!isset($_SESSION['empresa'])) 
    {
      header("Location: /empresa/index");
    }

  }
*/
}