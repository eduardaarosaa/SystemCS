<div id="loader" class="loader"></div>


<div style="display:none" id="tudo_page">
 
 <div class="container">
 <div class="row">
 <div class="col-md-12">
<p class="titulo">Ver usuários</p>

<table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">Chapa</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 

      foreach ($usuario as $rows){ ?> 
      <td><?php echo $rows->id;?></td>
      <td><?php echo $rows->nome;?></td>
      <td><?php echo $rows->email;?></td>
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