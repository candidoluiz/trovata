<?php

namespace App\model;

use App\core\Database;
use PDO;

class Produto
{
    public static function findAllByEmpresaId($id)
  {

    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM produto p inner join empresa  on p.EMPRESA=EMPRESA.EMPRESA WHERE p.EMPRESA = :ID', array(':ID' => $id));
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
}