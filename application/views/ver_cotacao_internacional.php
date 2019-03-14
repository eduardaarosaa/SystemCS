<?php


$array = get_object_vars($dados[0]);
$array1 = get_object_vars($dolar[0]);

$string = implode($array);
$string1 = implode($array1);

//echo $string . "<br>";

//echo $string1. "<br>";

$cotacao = ($string * $string1);

//echo $cotacao . "<br>";

//echo "R$" . number_format( $cotacao, '2',',','.')



?>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class=" margem jumbotron">
  <h1 class="display-4">Cotação Internacional do BTC</h1>
  <p class="lead"></p>
  <hr class="my-4">
  <p><?php echo "R$" . number_format( $cotacao, '2',',','.');?></p>

</div>
</div>
</div>
<a href="painel"><button class="btn btn-primary">Voltar</button></a>