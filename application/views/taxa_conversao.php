<div class="container">
    <div class="row top">
        <div class="col-md-12">
            <?php
             echo form_open_multipart('Controller_painel/addconversao');
           ?>
  <div class="form-group margem">
    <label for="exampleInputEmail1">Adicionar uma taxa de conversão</label>
    <textarea col="20" rows="10" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="questao1" placeholder="Descreva o motivo ou qualque informação que tenha:"></textarea>

  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" name="questao2" placeholder="Fonte de informação">
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

