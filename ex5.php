<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>ex 5</title>

</head>

<body>

	<!-- Escreva uma função que receba uma data no formato americano e retorne um array, contendo em suas 6 primeiras posições as informações de ano, mês, dia, hora, minuto e segundos respectivamente. Para a data "2010-12-31 12:00:00" o resultado deve ser "Array ( [0] => 2010 [1] => 12 [2] => 31 [3] => 12 [4] => 00 [5] => 00 )".  -->

	<form method="POST">

		<input type="date" name="data">
		<input type="submit">
		
	</form>

	<?php

		if (isset($_POST["data"])) {

			date_default_timezone_set("America/Sao_Paulo");
			
			$data = $_POST["data"];
			$agora = date("H:i:s");

			echo $agora."<br/>";
			echo $data;

			$nova_hora = explode(':', $agora);
			$nova_data = explode('-', $data);

			$data_hora = array_merge($nova_data, $nova_hora);
			echo "<br/>";
			print_r($data_hora);

		}

	?>
	
</body>

</html>