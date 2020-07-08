<?php  

$produto = $data['produto'][0];

?>
<main>
  <div class="container jumbotron">
    <div class="row p-3">
      <div class="col-md-12 center-block text-center">
        <h1>Editar Produto</h1>
      </div>
    </div>
    <form action="/produto/gravar">

      <div class="form-row">
        <div class="form-group col-md-3">
            <label for="produto">Produto</label>
            <input type="text" class="form-control" id="produto" name="produto" value="<?= $produto['PRODUTO']?>">
        </div>
        <div class="form-group col-md-9">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricaoProduto" value="<?= $produto['DESCRICAO_PRODUTO']?>">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="apelido">Apelido Produto</label>
          <input type="text" class="form-control" id="apelido" name="apelidoProduto" value="<?= $produto['APELIDO_PRODUTO'] ?>">          
        </div>
        <div class="form-group col-md-4">
          <label for="grupoProduto">Grupo Produto</label>
          <select class="form-control" name="grupoProduto" id="grupoProduto">
            <?php foreach ($data['grupoProdutos'] as $gp) { ?>
            <option value="<?= $gp['GRUPO_PRODUTO'] ?>"><?= $gp['DESCRICAO_GRUPO_PRODUTO'] ?></option>
          <?php } ?>

          </select>          
        </div>
         <div class="form-group col-md-4">
          <label for="subgrupo">Subgrupo Produto</label>
          <input type="number" class="form-control" id="apelido" name="subgrupoProduto" value="<?= $produto['SUBGRUPO_PRODUTO'] ?>">          
        </div>        
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="situacao">Situação</label>
          <select class="form-control" name="situacao" id="situacao">
            <option value="A">A</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="peso">Peso Liquido</label>
          <input type="number" class="form-control" id="peso" name="pesoLiquido" value="<?= $produto['PESO_LIQUIDO'] ?>">          
        </div>
        <div class="form-group col-md-4">
          <label for="fiscal">Classificação Fiscal</label>
          <input type="number" class="form-control" id="fiscal" name="classificacaoFiscal" value="<?= $produto['CLASSIFICACAO_FISCAL'] ?>">          
        </div>    
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="barras">Código de Barras</label>
          <input type="number" class="form-control" id="barras" name="codigoBarras" value="<?= $produto['CODIGO_BARRAS'] ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="colecao">Coleção</label>
          <input type="number" class="form-control" id="colecao" name="colecao" value="<?= $produto['COLECAO'] ?>">
        </div>
      </div>

      <!-- Fim do formulário-->      
      <button type="submit" class="btn btn-primary">Gravar</button>
    </form>
  </div>
</main>
