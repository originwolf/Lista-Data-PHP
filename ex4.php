<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>Ex 4</title>

</head>

<body>

	<!-- Escreva uma função que receba uma data no formato brasileiro (d/m/Y H:i:s) e converta para o formato americano (Y-m-d H:i:s). Para a string "31/12/2010 12:00:00" o resultado deve ser 2010-12-31 12:00:00.  -->

	<form action="" method="POST">
		
		<input type="date" name="data">
		<input type="submit">

	</form>

	<?php

		if (isset($_POST["data"])) {

			$data = $_POST["data"];
			$data_brasil = explode('-', $data);
			echo "Data brasileira: ".$data_brasil[2]."/".$data_brasil[1]."/".$data_brasil[0];
			echo "<br/>Data americana: ".$data;

		}

	?>
	
</body>

</html>