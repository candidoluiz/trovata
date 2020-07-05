<?php

use App\core\Controller;

class ProdutoController extends Controller
{
  public function lista()
  {

    $empresaId = $_POST['emp'];

    $Produtos = $this->model('Produto'); // é retornado o model Produto()
    $data = $Produtos::findAllByEmpresaId($empresaId);
    $this->view('produto/index', ['produtos' => $data]);
  }

  public function novo()
  {
    $this->view('produto/novo');
  }

}