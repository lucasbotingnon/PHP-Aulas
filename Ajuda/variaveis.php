<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>

		<?php 

		//int
		$valor_inteiro = 1 *4;
		echo $valor_inteiro;
		echo "<br/>";
		$valor_inteiro = $valor_inteiro * 2;
		echo $valor_inteiro;
		echo "<br/>";

		//float
		$valor_fracionado = 10.7;
		echo $valor_fracionado;
		echo "<br/>";

		//boolean
		$estado = true; //false
		echo $estado;
		echo "<br/>";

		//strings
		$texto = 'Curso de PHP -'.$valor_inteiro; // Se usar aspas duplas "" nao tem necessidade de colocar a variavel para fora , o interpretador do PHP le diferente
		echo $texto;

		 ?>

	</body>
</html>