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
<p class="titulo margem">Acompanhamento das Concorrentes</p>

<a href="gerar_mercado"><button class="btn btn-primary">Gerar Planilha</button></a>
<br>
<br>

<table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">Corretora</th>
      <th scope="col">Volume</th>
      <th scope="col">Preço</th>
      <th scope="col">Trades</th>
      <th scope="col">Data</th>

  

    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 

      foreach ($dados as $rows){ ?> 
      <td><?php 

      if($rows->nome == "WAL"){

        echo "Walltime";
      }elseif($rows->nome == "B2U"){

        echo "BitcoinToYou";

      }elseif($rows->nome == "CAM"){


      echo "BitCambio";

    }elseif($rows->nome == "BZX"){

      echo "Braziliex";
    }elseif($rows->nome == "MBT"){

      echo "Mercado Bitcoin";

    }elseif($rows->nome == "BTD"){

      echo "BitcoinTrade";
      }

  else{



      echo $rows->nome;
}
      ?>

      </td>
      <td><?php echo round($rows->volume);?></td>
      <td><?php echo "R$" . number_format( $rows->preco, '2',',','.');?></td>
      <td><?php echo $rows->trade; ?></td>
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