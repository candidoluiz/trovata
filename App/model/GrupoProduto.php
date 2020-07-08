<?php 

namespace App\model;

use App\core\Database;
use PDO;

/**
 * 
 */
class GrupoProduto
{
	public static function findAll()
	{
		$conn = new Database();
		$result = $conn->executeQuery('SELECT * FROM GRUPO_PRODUTO gp');
    	return $result->fetchAll(PDO::FETCH_ASSOC);
	}
}

?>