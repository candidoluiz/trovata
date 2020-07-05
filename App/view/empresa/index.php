<main>
  <div class="container jumbotron">
    <div class="row">
      <form method="POST" action="/produto/lista">
      <div class="col-12 " style="margin-top:100px">
        <h2>Empresas</h2>
      
      <select class="form-control" name="emp">
        <?php foreach ($data['empresas'] as $empresa) { ?>
          <option value="<?= $empresa['EMPRESA']; ?>"> <?= $empresa['RAZAO_SOCIAL']. ' - ' . $empresa['DESCRICAO_CIDADE'] ?></option>
        <?php } ?>
      </select>   
      </div>          
    </div>
    <div class="row">
      <div class="col-md-6">
        <button   type="submit"  class="btn btn-outline-primary">Confirmar</button>        
      </div>
    </div>
    </form>
  </div>
</main>