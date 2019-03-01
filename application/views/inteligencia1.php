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

<div class="row cards">
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
 
 	 <div class="card-body">
    <h5 class="card-title">Volume e valores das corretoras nacionais</h5>
    <p class="card-text">Acompanhe como está o mercado por corretora</p>
    <a href="ver_mercado" class="btn btn-primary">acompanhar</a>
  </div>
</div>
</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		 <div class="card-body">
    <h5 class="card-title">Cotação do índice internacional</h5>
    <p class="card-text">Veja o índice do bitcoin internacional</p>
    <a href="ver_cotacao_internacional" class="btn btn-primary">Acompanhar</a>

  </div>
	</div>
</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		 <div class="card-body">
    <h5 class="card-title">Cotação do índice nacionalmente</h5>
    <p class="card-text">Veja o índice do bitcoin nacional</p>
    <a href="ver_indice_nacional" class="btn btn-primary">Acompanhar</a>

  </div>
	</div>
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