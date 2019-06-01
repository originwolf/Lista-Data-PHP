<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>Ex 3</title>

</head>

<body>

	<!-- Faça um algoritmo que calcule a diferença entre duas datas, mostrando o tempo em segundos, minutos, horas e dia.  -->

	<?php

		$data1 = mktime(0, 0, 0, 11, 29, 2020);
		$data2 = mktime(0, 0, 0, 12, 31, 2020);

		echo "Data 1: 29/11/2020";
		echo "<br/>Data 2: 31/12/2020";

		$difseconds = $data2 - $data1;
		echo "<br/>Diferenças em segundos: ".$difseconds."<br/>";

		$difminutes = ($data2 - $data1) / 60;
		echo "Diferenças em minutos: ".$difminutes."<br/>";

		$difhours = (($data2 - $data1) / 60) / 60;
		echo "Diferenças em horas: ".$difhours."<br/>";

		$difdays = ((($data2 - $data1) / 60) / 60) / 24;
		echo "Diferenças em dias: ".$difdays."<br/>";

	?>
	
</body>

</html>