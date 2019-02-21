<div id="loader" class="loader"></div>


<div style="display:none" id="tudo_page">
 
 <div class="container">
 <div class="row">
 <div class="col-md-12">
<p class="titulo">Ver Leads</p>

<table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Estado</th>
      <th scope="col">País</th>
      <th scope="col">Região</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Nivel</th>
      

    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 

      foreach ($bdleads as $rows){ ?> 
      <td><?php echo $rows->nome;?></td>
      <td><?php echo $rows->telefone;?></td>
      <td><?php 

      $estado = substr($rows->telefone,0,5);

     // echo $estado;

      if($estado == ";5511"){
        

        echo "São Paulo";
      }else{
        echo "Estado não encontrada";
      }

      ?></td>
      <td><?php

      $pais = substr($rows->telefone,0,3);

      if($pais == ";55"){

        echo "Brasil";

      }else {

         echo "Pais não encontrado";
      }

      ?></td>
      <td><?php

      if($estado == ";5511"){

        echo "Sudeste";
      }else{
        echo "Região não encontrada";
      }

      ?></td>

        <td><?php

         echo $rows->quantidade;

      ?></td>
     
         <td><?php

        if($rows->quantidade >= "100"){

          echo "VIP";
        }else{
          echo "Intermediário";
        }

      ?></td>

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