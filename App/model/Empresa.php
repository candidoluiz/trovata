<?php

namespace App\model;

use App\core\Database;
use PDO;

class Empresa
{
    public static function findAll()
  {
    $conn = new Database();
    $result = $conn->executeQuery('select e.EMPRESA, e.RAZAO_SOCIAL,  c.DESCRICAO_CIDADE from empresa e inner join cidade c on e.EMPRESA = c.EMPRESA ');
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
}