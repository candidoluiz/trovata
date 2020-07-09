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
      WHERE p.EMPRESA = :ID AND tc.EMPRESA = :ID AND gp.EMPRESA = :ID', array(':ID' => $id));

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function findById($id)
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM produto p  WHERE p.PRODUTO = :ID', array(':ID' => $id));
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function update($id, $produto)
  {
    print_r($id);
    print_r($produto);
    $conn = new Database();
    $conn->executeQuery('UPDATE produto set
     PRODUTO              = :PRODUTO,
     DESCRICAO_PRODUTO    = :DESCRICAO_PRODUTO, 
     APELIDO_PRODUTO      = :APELIDO_PRODUTO, 
     GRUPO_PRODUTO        = :GRUPO_PRODUTO, 
     SUBGRUPO_PRODUTO     = :SUBGRUPO_PRODUTO, 
     SITUACAO             = :SITUACAO, 
     PESO_LIQUIDO         = :PESO_LIQUIDO, 
     CLASSIFICACAO_FISCAL = :CLASSIFICACAO_FISCAL, 
     CODIGO_BARRAS        = :CODIGO_BARRAS, 
     COLECAO              = :COLECAO 
     WHERE produto = :ID', 
      array(
        ':PRODUTO'              => $produto['produto'],
        ':DESCRICAO_PRODUTO'    => $produto['descricaoProduto'],
        ':APELIDO_PRODUTO'      => $produto['apelidoProduto'],
        ':SUBGRUPO_PRODUTO'     => $produto['subgrupoProduto'],
        ':SITUACAO'             => $produto['situacao'],
        ':PESO_LIQUIDO'         => $produto['pesoLiquido'],
        ':CLASSIFICACAO_FISCAL' => $produto['classificacaoFiscal'],
        ':CODIGO_BARRAS'        => $produto['codigoBarras'],
        ':COLECAO'              => $produto['colecao'],
        ':GRUPO_PRODUTO'        => $produto['grupoProduto'],
        ':ID'                   => $id
      ));
  }

  public static function insert($produto)
  {
    $conn = new Database();
    $conn->executeQuery('INSERT INTO produto(EMPRESA, PRODUTO, DESCRICAO_PRODUTO, APELIDO_PRODUTO, GRUPO_PRODUTO, SUBGRUPO_PRODUTO, SITUACAO, PESO_LIQUIDO, CLASSIFICACAO_FISCAL, CODIGO_BARRAS, COLECAO) VALUES(:EMPRESA, :PRODUTO, :DESCRICAO_PRODUTO, :APELIDO_PRODUTO, :GRUPO_PRODUTO, :SUBGRUPO_PRODUTO, :SITUACAO, :PESO_LIQUIDO, :CLASSIFICACAO_FISCAL, :CODIGO_BARRAS, :COLECAO)', 
      array(
        ':EMPRESA'              => $produto['empresa'],
        ':PRODUTO'              => $produto['produto'],
        ':DESCRICAO_PRODUTO'    => $produto['descricaoProduto'],
        ':APELIDO_PRODUTO'      => $produto['apelidoProduto'],
        ':SUBGRUPO_PRODUTO'     => $produto['subgrupoProduto'],
        ':SITUACAO'             => $produto['situacao'],
        ':PESO_LIQUIDO'         => $produto['pesoLiquido'],
        ':CLASSIFICACAO_FISCAL' => $produto['classificacaoFiscal'],
        ':CODIGO_BARRAS'        => $produto['codigoBarras'],
        ':COLECAO'              => $produto['colecao'],
        ':GRUPO_PRODUTO'        => $produto['grupoProduto']
      ));

  }

  public static function delete($id)
  {
     $conn = new Database();
     $conn->executeQuery('DELETE from produto where produto = :ID', array(':ID' => $id));
  }
}