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
<p class="titulo">Mapa de processo de empatia</p>

<a href="gerar_mapa"><button class="btn btn-primary">Gerar Planilha</button></a>
<br>
<br>

<table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">O cliente demonstrou interesse?</th>
      <th scope="col">Qual foi o temperamento do cliente?</th>
      <th scope="col">Detalhes do contato?</th>
      <th scope="col">Data</th>

  

    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 

      foreach ($contato as $rows){ ?> 
      <td><?php echo $rows->questao1;?></td>
      <td><?php echo $rows->questao2;?></td>
      <td><?php echo $rows->questao3;?></td>
      <td><?php echo date('d/m/Y H:i:s', strtotime($rows->data));?></td>

 

    </tr>

      <?php } ?>
   
  </tbody>
</table>
<a href="painel"><button class="btn btn-primary">Voltar</button></a>


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