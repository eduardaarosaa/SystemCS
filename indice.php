<?php
$link = mysqli_connect("localhost", "root", "", "sistema");
$json = file_get_contents( 'https://api.bitvalor.com/v1/ticker.json' );
$object = json_decode( $json );


// exchanges object
$exchanges = $object->ticker_24h->exchanges;
$indice = $object->ticker_24h->total;


$array_indice = get_object_vars($indice);

    //var_dump($array_indice);

    print_r($array_indice['last']);


    $valor = $array_indice['last'];

    print_r($valor);


$inserir = "insert into indice (valor) values ('$valor')";
$resultado = mysqli_query($link,$inserir);

if($resultado = true){

   echo "Indice do dia adicionado ao banco";
}else{

  echo "Error!";
}

?>