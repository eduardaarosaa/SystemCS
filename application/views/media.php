
<div class="container">
<div class="row">
<div class="col-md-12">
<div class=" margem jumbotron">
 <?php 
 
 

 $array = get_object_vars($dados[0]);
 $string = implode($array);
 
 ?>
  <h1 class="display-4">Média nacional do preço do BTC</h1>
  <p class="lead"></p>
  <hr class="my-4">
  <p><?php echo "R$" . number_format( $string, '2',',','.');?></p>

</div>
</div>
</div>
<a href="painel"><button class="btn btn-primary">Voltar</button></a>