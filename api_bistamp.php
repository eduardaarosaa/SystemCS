
<?php

$link = mysqli_connect("localhost", "root", "", "sistema");
$url= "https://www.bitstamp.net/api/ticker/";

$request_headers = array();
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$data = curl_exec($ch);

if (curl_errno($ch))
  {
  print "Error: " . curl_error($ch);
  }
  else
  {
  // Show me the result
 // passo de JSON para array 
  var_dump($transaction = json_decode($data, TRUE));

  if($transaction == true){
      echo "conexão Ok";
  }else{
      echo "Eroor";
  }

    print_r($transaction['last']);
    print_r($transaction['volume']);

    $valor = $transaction['last'];
    $volume = $transaction['volume'];

    print_r($valor);
    print_r($volume);

  curl_close($ch);
  

  }

$inserir = "insert into bitstamp (valor,volume) values ('$valor','$volume')";
$resultado = mysqli_query($link,$inserir);

if($resultado = true){

   echo "dados adicionado ao banco";
}else{

  echo "Error!";
}

 

?>
