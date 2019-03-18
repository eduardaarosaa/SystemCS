<div id="loader" class="loader"></div>


<div style="display:none" id="tudo_page">
 
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
<p class="titulo">Manutenção</p>

</div>
</div>
 </div>

<script>

jQuery(window).load(function () {
      $(".loader").delay(1200).fadeOut("slow"); //retire o delay quando for copiar!
    $("#tudo_page").toggle("fast");
});

</script>