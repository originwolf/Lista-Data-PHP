<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>Ex 1</title>

</head>

<body>

	<!-- Exiba separadamente o dia, mês e ano de uma data completa fornecida pelo usuário -->

	<form action="" method="POST">

		<input type="date" name="data">
		<input type="submit">

	</form>

	<?php
		
		if (isset($_POST["data"])) {

			$data = $_POST["data"];
			
			$data_array = explode('-', $data);

			echo "Dia: ".$data_array[2];
			echo "<br/>Mês: ".$data_array[1];
			echo "<br/>Ano: ".$data_array[0];

		}

	?>
	
</body>

</html>