<?php 

$produtos[1] = 'Sofa';
$produtos[2] = 'Mesa';
$produtos[3] = 'Cadeira';
$produtos[4] = 'Fogao';
$produtos[5] = 'Geladeira';

//var_dump($produtos);
foreach ($produtos as $produto){
	
	echo $produto."<br/>";
	if ($produto == 'Mesa') {
		echo "Compre uma mesa e ganhe 25% de desconto na compra de uma cadeira";
	}

}

?>