<!DOCTYPE html>
<html>
<head>
	<title>Planilha</title>
	<meta charset="UTF-8">

</head>
<body>
	<?php
	//Nome do arquivo
	$arquivo = 'mapa.xls';

	//Tabela em formato html
	$html = '';
	$html .='<table border="1">';
	$html .='<tr>';
	$html .='<td>O que ele pensa e sente?</td>';
	$html .='<td>O que ele vê?</td>';
	$html .='<td>O que ele fala e faz?</td>';
	$html .='<td>O que ele escuta?</td>';
	$html .='<td>Suas dores?</td>';
	$html .='<td>Seus ganhos?</td>';
	$html .='<td>Data?</td>';
	$html .='</tr>';


			foreach ($gerar_mapa as $rows) {
				# code...
			
			$html .= '<tr>';
			$html .= '<td>'.$rows->questao1.'</td>';
			$html .= '<td>'.$rows->questao2.'</td>';
			$html .= '<td>'.$rows->questao3.'</td>';
			$html .= '<td>'.$rows->questao4.'</td>';
			$html .= '<td>'.$rows->questao5.'</td>';
			$html .= '<td>'.$rows->questao6.'</td>';
			$html .= '<td>'.$rows->data.'</td>';
			$html .= '</tr>';
			
		}

	header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
	?>

</body>
</html>
