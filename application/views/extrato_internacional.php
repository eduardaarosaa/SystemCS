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
<p class="titulo margem">Acompanhamento da Bitstamp internacional</p>

<a href="gerar_mercado"><button class="btn btn-primary">Gerar Planilha</button></a>
<br>
<br>

<table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">Corretora</th>
      <th scope="col">Volume</th>
      <th scope="col">Preço</th>
      <th scope="col">Data</th>


  

    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

    
    foreach ($dados as $rows){ ?>

    <td><?php
      
      echo "Bitstamp";
    
      ?>

      </td>
      <td><?php echo round($rows->volume);?></td>
      <td><?php echo "US$" . number_format( $rows->valor, '2',',','.');?></td>
   
      <td><?php echo date('d/m/Y', strtotime($rows->data));?></td>

 

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