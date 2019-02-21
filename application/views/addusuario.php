<div class="container">
    <div class="row top">
        <div class="col-md-12">
            <?php
             echo form_open_multipart('Controller_painel/adduser');
           ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Adicionar um usuário</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" placeholder="Nome do Usuário">

  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Senha">
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

