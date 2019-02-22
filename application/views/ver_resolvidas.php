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
<p class="titulo margem">Taxa de problemas resolvidos</p>

<a href="gerar_resolvidas"><button class="btn btn-primary">Gerar Planilha</button></a>
<br><br>
<table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">O Problema do cliente foi resolvido?</th>
      <th scope="col">Caso não, qual procedimento adotado?</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 

      foreach ($ver_resolvidas as $rows){ ?> 
      <td><?php echo $rows->questao1;?></td>
      <td><?php echo $rows->questao2;?></td>
      <td><?php echo $rows->data;?></td>
    </tr>

      <?php } ?>
   
  </tbody>
</table>
<a href="taxas"><button class="btn btn-primary">Voltar</button></a>


<br><br>


</div>
</div>
</div>
 </div>

<script>

jQuery(window).load(function () {
      $(".loader").delay(1200).fadeOut("slow"); //retire o delay quando for copiar!
    $("#tudo_page").toggle("fast");
});

</script>