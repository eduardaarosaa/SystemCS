<div class="container">
    <div class="row top">
        <div class="col-md-12">
            <?php
             echo form_open_multipart('Controller_painel/addtelas');
           ?>
  <div class="form-group margem">
    <label for="exampleInputEmail1">Adicionar uma taxa de problema por fluxo de processo no app.</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="questao1" placeholder="Qual o problema encontrado ou dificuldade?">

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

