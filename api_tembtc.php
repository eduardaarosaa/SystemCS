
<?php

$link = mysqli_connect("localhost", "root", "", "sistema");
$url= "https://broker.tembtc.com.br/api/v3/btcbrl/ticker";

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

    print_r($transaction['buy']);
    print_r($transaction['vol']);

    $valor = $transaction['buy'];
    $volume = $transaction['vol'];

    print_r($valor);
    print_r($volume);

  curl_close($ch);
  

  }

  $inserir = "insert into tembtc(valor,volume)values('$valor','$volume')";
  $res = mysqli_query($link,$inserir);

  if($res = true){
      echo "Inserido no bd";
  }else{
      echo "Error bd!";
  }


?>
