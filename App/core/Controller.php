<?php

namespace App\core;

use App\model\Empresa;
use App\model\Produto;

/**
* Esta classe é responsável por instanciar um model e chamar a view correta
* passando os dados que serão usados.
*/
class Controller
{

  /**
  * Este método é responsável por chamar uma determinada view (página).
  *
  * @param  string  $model   É o model que será instanciado para usar em uma view, seja seus métodos ou atributos
  */
  public function model($model)
  {
    require '../App/model/' . $model . '.php';
    $classe = 'App\\model\\' . $model;
    return new $classe();

  }

  /**
  * Este método é responsável por chamar uuma determinada view (página).
  *
  * @param  string  $view   A view que será chamada (ou requerida)
  * @param  array   $data   São os dados que serão exibido na view
  */
  public function view(string $view, $data = [])
  {
    require '../App/view/' . $view . '.php';

  }

  /**
  * Este método é herdado para todas as classes filhas que o chamaram quando
  * o método ou classe informada pelo usuário não forem encontrados.
  */
  public function pageNotFound()
  {
    $this->view('erro404');
  }
}