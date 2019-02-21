<!DOCTYPE html>
<html>
<head>
	<title>Planilha</title>
	<meta charset="UTF-8">

</head>
<body>
	<?php
	//Nome do arquivo
	$arquivo = 'leads.xls';

	//Tabela em formato html
	$html = '';
	$html .='<table border="1">';
	$html .='<tr>';
	$html .='<td>Nome</td>';
	$html .='<td>Telefone</td>';
	$html .='<td>Nível</td>';
	$html .='<td>Cidade</td>';
	$html .='<td>Estado</td>';
	$html .='<td>Região</td>';
	$html .='<td>Quantidade</td>';
	$html .='</tr>';


			foreach ($gerar_planilha as $rows) {
				# code...
			
			$html .= '<tr>';
			$html .= '<td>'.$rows->nome.'</td>';
			$html .= '<td>'.$rows->telefone.'</td>';
			$html .= '<td>'.$rows->nivel.'</td>';
			$html .= '<td>'.$rows->cidade.'</td>';
			$html .= '<td>'.$rows->estado.'</td>';
			$html .= '<td>'.$rows->regiao.'</td>';
			$html .= '<td>'.$rows->quantidade.'</td>';
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