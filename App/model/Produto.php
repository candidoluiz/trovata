<?php

namespace App\model;

use App\core\Database;
use PDO;

class Produto
{
  //colocar atributos

    public static function findAllByEmpresaId($id)
  {

    $conn = new Database();
    $result = $conn->executeQuery(
      'SELECT * FROM produto p 
      inner join empresa  on p.EMPRESA=EMPRESA.EMPRESA 
      inner join grupo_produto gp on p.grupo_produto = gp.grupo_produto 
      inner join tipo_complemento tc on tc.TIPO_COMPLEMENTO = gp.TIPO_COMPLEMENTO
      WHERE p.EMPRESA = :ID', array(':ID' => $id));

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function findById($id)
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM produto p  WHERE p.PRODUTO = :ID', array(':ID' => $id));
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function update($id)
  {

  }

  public static function insert()
  {

  }

  public static function delete($id)
  {
    
  }
}