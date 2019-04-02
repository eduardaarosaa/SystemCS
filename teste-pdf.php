<?php

require_once  'C:\xampp\htdocs\Sistema\vendor\autoload.php' ;
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();

?>