<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>

		<?php 

		// Arrays
		//$mensagens_divertidas[1] = 'Estou fazendo as contas aqui e este mes nao tem jeito, vo uter que ganhar na loteria.';
		//$mensagens_divertidas[2] = 'As 3 coisas que as mulheres mais gostam de ouvir: Eu te amo, 50% de desconto e como voce emagreceu.';
		//$mensagens_divertidas[3] = 'Cara feia pra mim e espelho.';
		//$mensagens_divertidas[4] = 'Estou tao carente que o churrasqueiro chega e diz: "Coracao?" e eu respondo: "O que foi amor?".';
		//$mensagens_divertidas[5] = 'O casamento e um relacionamento a dois, no qual uma das pessoas esta sempre certa e a outra esta sempre errada.';

		//
		$mensagens_divertidas = array( a => 'Estou fazendo as contas aqui e este mes nao tem jeito, vo uter que ganhar na loteria.'
		);

		// Echo e Print nao conseguem fazer a impressao de tipo Array
		//Usamos esses dois parametros var_dump e print_r
		var_dump($mensagens_divertidas);
		echo "<br/>";
		echo $mensagens_divertidas[a];
		//print_r($mensagens_divertidas)

		// quando se escolhe a posicao do array ele mostra normalmente
		//echo $mensagens_divertidas[3];
		//echo "<br/>";
		//print $mensagens_divertidas[2];
		 ?>

	</body>
</html>