<?php
$link = mysqli_connect("localhost", "root", "", "sistema");
$query = "Select valor from bitstamp ORDER BY id DESC LIMIT 1";
$pesquisar = mysqli_query($link,$query);

while($fetch = mysqli_fetch_row($pesquisar)){
     $valor  = $fetch[0];
     echo $valor;
}

$query1 = "Select valor from cotacao_dolar ORDER BY id DESC LIMIT 1";
$pesquisar1 = mysqli_query($link,$query1);

while($fetch1 = mysqli_fetch_row($pesquisar1)){
    $dolar = $fetch1[0];
    echo $dolar;

}

$cotacao = $valor * $dolar;

echo $cotacao;

$inserir = "insert into internacional (valor) values ('$cotacao')";
$insert = mysqli_query($link,$inserir);

if($insert=true){
    echo "FOI";
}else{
    echo "Error";
}


//$array = get_object_vars($dados[0]);
//$array1 = get_object_vars($dolar[0]);

//$string = implode($array);
//$string1 = implode($array1);

//echo $string . "<br>";

//echo $string1. "<br>";

//$cotacao = ($string * $string1);



?>