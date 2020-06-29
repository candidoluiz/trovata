<main>
  <div class="container jumbotron">
    <div class="row">      
      <div class="col-10 offset-2" >
        <h2 class="mx-auto " style="width: 50%;"><?php print_r($data['produtos'][0]['NOME_FANTASIA']) ?></h2>
        <h3 class="p-3">Lista de Produtos</h3>
      </div>
      </div>
        <div class="row">
          <div class="col-md-12">
            <div class=" p-3">
            <button onClick="novoProduto()" type="button" class="btn btn-primary">Novo</button>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-12">
        <div class="table-responsive-md">
          
        
        <table class=" table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Produto</th>
              <th scope="col">Peso Liquido</th>
              <th scope="col"></th>
               <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['produtos'] as $produto) { ?>
            <tr>              
              <th scope="row"><?= $produto['PRODUTO'] ?></th>
              <td><?= $produto['DESCRICAO_PRODUTO'] ?></td>
              <td><?= $produto['PESO_LIQUIDO'] ?></td>              
              <td><button onClick="editarProduto(<?= $produto['PRODUTO'] ?>)" type="button" class="btn btn-outline-success">Editar</button></td>
              <td><button onClick="editarProduto(<?= $produto['PRODUTO'] ?>)" type="button" class="btn btn-outline-danger">Excluir</button></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
        </div>  
      </div>
      </div>            
    </div>
  </div>
</main>