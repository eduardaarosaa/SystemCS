
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
<p class="titulo">Ver Leads</p>

<div class="row">
    <div class="col-md-12">
      <a href="gerar_planilha"><button class="btn btn-primary">Gerar Planilha</button></a>
    </div>
  </div>
<br>
<table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Nível</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Região</th>
      <th scope="col">Quantidade</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 

      foreach ($leads as $rows){ ?> 
      <td><?php echo $rows->nome;?></td>
      <td><?php echo $rows->telefone;?></td>
      <td><?php echo $rows->nivel;?></td>
      <td><?php echo $rows->cidade;?></td>
      <td><?php echo $rows->estado;?></td>
      <td><?php echo $rows->regiao;?></td>
      <td><?php echo $rows->quantidade;?></td>

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