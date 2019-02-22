<?php

if ( $this->session->userdata('login') == true ) {  


		$nome = $this->session->userdata('nome');
		$nivel = $this->session->userdata('nivel');
   
} else { 

	redirect("Controller_painel/acesso", 'redirect');

	
	} 


?> 
<div class="container">
<div class="row cards">
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
 
 	 <div class="card-body">
    <h5 class="card-title">Taxas de problemas resolvidos</h5>
    <p class="card-text">Todos os clientes que entram em contato e o caso for resolvido deve ser registrado.</p>
    <a href="resolvidas" class="btn btn-primary">Adicionar</a>
    <a href="ver_resolvidas" class="btn btn-primary">Ver taxas</a>
  </div>
</div>
</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		 <div class="card-body">
    <h5 class="card-title">Taxa de problemas técnicos</h5>
    <p class="card-text">Todo problema que for técnico com relação ao app deverá ser registrado.</p>
    <a href="tecnico" class="btn btn-primary">Adicionar</a>
        <a href="ver_tecnico" class="btn btn-primary">Ver taxas</a>

  </div>
	</div>
</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		 <div class="card-body">
    <h5 class="card-title">Taxa de fluxo de processo</h5>
    <p class="card-text">Caso algum cliente esteja tendo dificuldades de como funciona o app registrar.</p>
    <a href="tela" class="btn btn-primary">Adicionar</a>
    <a href="ver_telas" class="btn btn-primary">Ver taxas</a>

  </div>
	</div>
	</div>
</div>
<div class="row cards">
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		 <div class="card-body">
    <h5 class="card-title">Taxa de abandono</h5>
    <p class="card-text">Caso algum cliente entrar em contato e não conseguirmos entrar em contato novamente deve se registrar.</p>
    <a href="abandono" class="btn btn-primary">Adicionar</a>
     <a href="ver_abandono" class="btn btn-primary">Ver taxas</a>

  </div>
</div>

	</div>
</div>
<div class="col-md-12">
  <a href="painel"><button class="btn btn-primary cards">Voltar</button></a>
  </div>
</div>