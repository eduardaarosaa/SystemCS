<div class="container">
    <div class="row">

    <div class="col-md-12">

    <?php
      echo form_open_multipart('Controller_painel/gerar_inteligencia');
     ?>

<!--<div class="form-group margem">
    <label for="exampleInputEmail1">Digite um período para extrair o relatório  <?php  $Tipo = "0"; ?></label>
    
    <select name="Tipo" form="carform">
  <option value="dia" <?=($Tipo == '1')?'selected':''?>>Dia</option>
  <option value="semanal" <?=($Tipo == '7')?'selected':''?>>Semanal</option>
  <option value="mensal"<?=($Tipo == '30')?'selected':''?>>Mensal</option>

</select>

  </div>-->

  <button type="submit" class="btn btn-primary">Semanal</button>


  <?php
  echo form_close();
  ?>
  <br>
   <a href="painel"><button class="btn btn-primary">Voltar</button></a>

</div>
</div>
</div>