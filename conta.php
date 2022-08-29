<?php 

	$operador = 1;
	$num1 = 10;
	$num2 = 20;
	$result = 0;
	$operacao = "";

		switch ($operador) {
			case 1 : $result = somavalor($num1, $num2);
				$operacao = "soma";
			break;
		
		}
	 
	 echo $result;

 	function somavalor($num1,$num2) {
		return($num1+$num2);
	}


 ?>