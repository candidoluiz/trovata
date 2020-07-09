<main>
  <div class="container jumbotron">
    <button onclick="location.href ='/empresa/fechar'" type="button" class="btn btn-danger">Selecionar Empresa</button>
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
          
        
        <table class=" table table-striped" id="userTable">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Produto</th>
              <th scope="col">Descrição</th>
              <th scope="col">Complemento</th>
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
              <td><?= $produto['DESCRICAO_GRUPO_PRODUTO'] ?></td>
              <td><?= $produto['DESCRICAO_TIPO_COMPLEMENTO'] ?></td>
              <td><?= $produto['PESO_LIQUIDO'] ?></td>              
              <td><button onClick="editarProduto(<?= $produto['PRODUTO'] ?>)" type="button" class="btn btn-outline-success">Editar</button></td>
              <td><button onClick="passarValor(<?= $produto['PRODUTO'] ?>)" data-toggle="modal" data-target="#confirmacaoModal" type="button" class="btn btn-outline-danger">Excluir</button></td>
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
<script>
$(document).ready(function() {
    $('#userTable').DataTable({
      "columns": [
      null,
      null,
      null,
      null,
      null,
      {"orderable" : false},
      {"orderable" : false}

      ]
    });
});
</script>
<!-- Modal -->
<div class="modal fade" id="confirmacaoModal" tabindex="-1" role="dialog" aria-labelledby="confirmacaoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EXCLUIR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseja realmente excluir esse produto?
        <input type="hidden" name="campo" id="campo">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button onClick="deletar(valor())" type="button" class="btn btn-danger" data-dismiss="modal">Excluir</button>
      </div>
    </div>
  </div>
</div>