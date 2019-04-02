<div id="loader" class="loader"></div>


<div style="display:none" id="tudo_page">
 
 <div class="container">
 <div class="row">
 <div class="col-md-12">
<p class="titulo margem">Cotação do índice de bitcoin nacional</p>

<a href="#"><button class="btn btn-primary">Gerar Planilha</button></a>
<br>
<br>

<table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">Valor do índice do bitcoin?</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 

      foreach ($dados as $rows){ ?> 
      <td><?php echo "R$" . number_format($rows->valor,'2',',','.');?></td>
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