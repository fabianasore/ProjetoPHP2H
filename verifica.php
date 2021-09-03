<?php 

	echo "<br/> Olá seja bem-vindo".$_SERVER['REMOTE_ADDR'] . "<br/><br>";
	echo "Você está utilizando o navegador:".$_SERVER['HTTP_USER_AGENT']. "<br/><br>";

	define("PI", 3.5692033);
	define("DISC", "Matemática");
	echo "O valor do pi é:".PI . "<br><br>";
	echo "O nome do curso é:".DISC . "<br><br><br>";

	//$CURSO = 7;
	//$CURSO += 2;

	//$CURSO = $CURSO + 2;

	//$resto = $resto % 2;

	//$soma = 0;

	//$valor = 10;

	//$soma = $soma + $valor;

	$opcao = '2';
	switch ($opcao) {
		case '1':
			echo "A opção 1 foi selecionada.";
			break;
		case '2':
			echo "A opção 2 foi selecionada.";
			break;
		case '3':
			echo "A opção 3 foi selecionada.";
			break;
		
		default:
		echo "Opção incorreta";
			break;
	}


 ?>