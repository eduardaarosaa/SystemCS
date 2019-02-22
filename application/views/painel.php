<div id="loader" class="loader"></div>
<div style="display:none" id="tudo_page">
<body>

<?php

if ( $this->session->userdata('login') == true ) {  


		$nome = $this->session->userdata('nome');
		$nivel = $this->session->userdata('nivel');
   
} else { 

	redirect("Controller_painel/acesso", 'redirect');

	
	} 


?> 


<div class="container">
	<div class="row">
		<div class="col-md-12">

		<?php
			 echo '<p class="bem"> Olá ' . $this->session->userdata("nome") . '</p>';
			 //echo $this->session->userdata('nivel'); 
			?>
		</div>


		<div class="col-md-12">

			
			<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h5 class="display-5">Saúde dos Clientes:</h5>
    <br>
	<?php
		//$media está vindo de um select na função painel
		// Esse select está trazendo a média do campo questao7 que é a nota por atendimento
		//$media retorna um objeto 
		//get_object_vars transforma o objeto em array
		$array = get_object_vars($media[0]);
		//implode transforma array em string
		$string = implode($array);
	
		if($string>=7){
			echo "<img src='../../img/saude.png' width='100px'>";
		}elseif($string>=5 or $media<=6){
			echo "<img src='../../img/maisoumenos.png' width='100px'>";
		}else{
			echo "<img src='../../img/triste.png' width='100p'>";
		}
?>
    
  </div>
</div>


		</div>
	</div>
<div class="row cards">
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
 
 	 <div class="card-body">
    <h5 class="card-title">Usuário</h5>
    <p class="card-text">Para adicionar um usuário ao sistema é necessário preencher o cadastro.</p>
    <a href="addusuario" class="btn btn-primary">Adicionar</a>
    <a href="veruser" class="btn btn-primary">Ver usuário</a>
  </div>
</div>
</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		 <div class="card-body">
    <h5 class="card-title">Leads</h5>
    <p class="card-text">Para adicionionar um lead manualmente ao sistema poderá adicionar por aqui.</p>
    <a href="leads" class="btn btn-primary">Adicionar</a>
        <a href="verleads" class="btn btn-primary">Ver os manuais</a>

  </div>
	</div>
</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		 <div class="card-body">
    <h5 class="card-title">Mapeamento de Empatia</h5>
    <p class="card-text">Para responder o mapa de empatia de acordo com o cliente que atendeu clique aqui.</p>
    <a href="mapa" class="btn btn-primary">Adicionar</a>
    <a href="vermapa" class="btn btn-primary">Ver respostas</a>

  </div>
	</div>
	</div>
</div>
<div class="row cards">
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		 <div class="card-body">
    <h5 class="card-title">Restaurar senha</h5>
    <p class="card-text">Caso algum usuário perca a senha poderá ser atualizada aqui novamente.</p>
    <a href="senha" class="btn btn-primary">Atualizar senha</a>

  </div>
</div>

	</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		 <div class="card-body">
    <h5 class="card-title">Leads Banco</h5>
    <p class="card-text">Caso queira ver algum lead que foi adicionado ao Banco por script automaticamente.</p>
    <a href="bdleads" class="btn btn-primary">Ver leads do Banco</a>

  </div>

</div>
</div>

	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		 <div class="card-body">
    <h5 class="card-title">Inteligência de Mercado</h5>
    <p class="card-text">Caso você queria análisar como anda o mercado de criptomoeda através das corretoras clique aqui.</p>
    <a href="ver_mercado" class="btn btn-primary">Ver mercado</a>

  </div>

</div>
</div>
</div>
<div class="row cards">
	<div class="col-md-4">
<div class="card" style="width: 18rem;">
		 <div class="card-body">
    <h5 class="card-title">Pós-atendimento</h5>
    <p class="card-text">Registrar um pós atendimento clique aqui, ao ser redirecionado escolha o tipo.</p>
    <a href="pos" class="btn btn-primary">Pós-atendimento</a>
	</div>
	</div>
</div>


	<div class="col-md-4">
<div class="card" style="width: 18rem;">
		 <div class="card-body">
    <h5 class="card-title">Taxas</h5>
    <p class="card-text">As taxas são muito importantes é preciso analisar e entender as suas causas.</p>
    <a href="taxas" class="btn btn-primary">Ver taxas</a>
	</div>
	</div>
</div>

<div class="col-md-4">
<div class="card" style="width: 18rem;">
		 <div class="card-body">
    <h5 class="card-title">Primeiro Contato</h5>
    <p class="card-text">Para avaliar o primeiro contato com os clientes e ver se estar trazendo resultado.</p>
    <a href="primeiro_contato" class="btn btn-primary">Adicionar</a>
		<a href="ver_contato" class="btn btn-primary">Ver resultados</a>
	</div>
	</div>
</div>

</div>
</div>
</div>
<br><br>
</body>
<script>

jQuery(window).load(function () {
      $(".loader").delay(1200).fadeOut("slow"); //retire o delay quando for copiar!
    $("#tudo_page").toggle("fast");
});

</script>

</html>