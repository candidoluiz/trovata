<main>
  <div class="container jumbotron ">
    <form method="POST" action="/produto/lista">
      <div class="form-row align-items-center justify-content-center">
        <div class="form-group ">
          <div class="form-row align-items-center justify-content-center">
             <h2>Empresas</h2>
          </div>         
          <select class="form-control" name="emp">
            <?php foreach ($data['empresas'] as $empresa) { ?>
              <option value="<?= $empresa['EMPRESA']; ?>"> <?= $empresa['RAZAO_SOCIAL']. ' - ' . $empresa['DESCRICAO_CIDADE'] ?></option>
              <?php } ?>
          </select>
        </div>
      </div>
      <div  class="form-row align-items-center justify-content-center">
        <button  type="submit"  class="btn btn-outline-primary">Confirmar</button>
      </div>      
    </form>
  </div>
</main>