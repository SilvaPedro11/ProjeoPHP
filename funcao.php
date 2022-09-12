<?php 

	
	function ValidarNome(){
		echo "Executando <br>";
	}

	function somavalor($num1,$num2){
		return ($num1 + $num2);
	}

	//executando as funções

	$val1 = 20.0;
	$val2 = 20.0;

	ValidarNome();
	echo "<br> A soma é " .somavalor($val1,$val2); 
 ?>