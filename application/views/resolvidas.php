<?php

if ( $this->session->userdata('login') == true ) {  


		$nome = $this->session->userdata('nome');
		$nivel = $this->session->userdata('nivel');
   
} else { 

	redirect("Controller_painel/acesso", 'redirect');

	
	} 


?> 
<div class="container">
    <div class="row top">
        <div class="col-md-12">
            <?php
             echo form_open_multipart('Controller_painel/addresolvidas');
           ?>
  <div class="form-group margem">
    <label for="exampleInputEmail1">Adicionar uma taxa de problema resolvido</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="questao1" placeholder="O problema do cliente foi resolvido ?">

  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" name="questao2" placeholder="Caso não qual procedimento efetuou ?">
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

