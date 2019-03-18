<?php
$link = mysqli_connect("localhost", "root", "", "sistema");
$array = get_object_vars($dados[0]);
$array1 = get_object_vars($dolar[0]);

$string = implode($array);
$string1 = implode($array1);

//echo $string . "<br>";

//echo $string1. "<br>";

$cotacao = ($string * $string1);

$inserir = "insert into internacional (volume) values ('$cotacao')";
mysqli_query($link,$inserir);

?>