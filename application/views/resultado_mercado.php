<html>
    <head>
</head>
<body>
<h1>Relátorio de inteligência de mercado</h1>
</body>
</html>
<?php

//var_dump($dados);
$array = json_decode(json_encode($dados), True);

//var_dump($array);


foreach($array as $row){
    $pagina = 
    $row['valor'];
    $row['data'];

  //echo $pagina . "<br>";

  $string = print_r($pagina);

  //echo $string;
}

    echo $string;
    //echo ($pagina);




    //require_once  'C:\xampp\htdocs\Sistema\vendor\autoload.php' ;
    //$mpdf = new \Mpdf\Mpdf();
    //$mpdf->WriteHTML(
       
      //$string
   

    //);
    //$mpdf->Output();


    
