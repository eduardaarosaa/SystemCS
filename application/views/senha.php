<div class="container">
    <div class="row top">
        <div class="col-md-12">
            <?php
         echo form_open_multipart('Controller_painel/redefinirsenha');
           ?>
  <div class="form-group margem">
    <label for="exampleInputEmail1">Redefinir senha de um usuário</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chapa" placeholder="Chapa do usuário">

  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="senha">
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
  <button type="reset" class="btn btn-primary">Limpar</button>

  <?php
  echo form_close();
  ?>
  <br>
  <a href="painel"><button class="btn btn-primary">Voltar</button></a>

    
</div>
</div>
</div>


