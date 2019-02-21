<div class="container">
    <div class="row top">
        <div class="col-md-12">
            <?php
         echo form_open_multipart('Controller_painel/addleads');
           ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Adicionando um Lead</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" placeholder="Digite o nome do cliente">
    <br>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="telefone" placeholder="Digite o número de telefone">
    <br>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nivel" placeholder="Digite o nível">
      <br>

    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cidade" placeholder="Digite a cidade">
        <br>

    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="estado" placeholder="Digite o estado">
        <br>

    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="regiao" placeholder="Digite a região">
        <br>

    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="quantidade" placeholder="Digite a quantidade">

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


