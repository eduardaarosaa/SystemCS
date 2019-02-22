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
             echo form_open_multipart('Controller_painel/addmapa');
           ?>
  <div class="form-group margem">
    <label for="exampleInputEmail1">Registrar uma informação</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="questao1" placeholder="O que o cliente pensa e sente?">

  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" name="questao2" placeholder="O que ele vê?">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" name="questao3" placeholder="O que ele faz e fala?">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" name="questao4" placeholder="O que ele escuta?">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" name="questao5" placeholder="Suas dores">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" name="questao6" placeholder="Seus ganhos">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" name="questao7" placeholder="Nota de saúde">
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

