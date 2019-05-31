<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>ex 6</title>

</head>

<body>

	<!-- Escreva uma função que receba uma data no formato americano e informe se é uma data e hora válida ou não, retornando um valor boleano para isto. Para a data "2010-12-31" o resultado deve ser verdadeiro, e para a data "2010-02-31" o resultado deve ser falso. -->

	<form method="POST">

		<input type="date" name="data">
		<input type="submit">
		
	</form>

	<?php

		if (isset($_POST['data'])) {
			
			$data = $_POST['data'];

			$nova_data = explode('-', $data);

			if (checkdate($nova_data[1], $nova_data[2], $nova_data[0])) {
				echo "Data válida.";
			}else{
				echo "Data inválida.";
			}

		}

	?>
	
</body>

</html>