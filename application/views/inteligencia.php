<?php

	echo('<pre>'.print_r($bitvalor,1).'</pre>');
// Um exemplo do display de um dos valores do array
   echo("<br><br>Ultima cotação do Bitcoin na Foxbit: ".
      $bitvalor["ticker_1h"]["exchanges"]["FOX"]["last"]
      );
?>