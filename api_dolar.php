
<?php

$link = mysqli_connect("localhost", "root", "", "sistema");
$url= "https://economia.awesomeapi.com.br/USD-BRL/1?format=json";

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

  ($transaction = json_decode($data, TRUE));

  if($transaction == true){
      echo "conexão Ok";
  }else{
      echo "Eroor";
  }

  foreach($transaction as $element){

       $element['high'].PHP_EOL;

       $dolar = $element['high'];

       echo $dolar;
  }


  curl_close($ch);
  

  }

  $inserir = "insert into cotacao_dolar(valor)values('$dolar')";
  $resultado = mysqli_query($link,$inserir);

  if($resultado = true ){
      echo "Inserido no bando de dados";

  }else{
      echo "Erro ao inserir no banco";
  }






?>