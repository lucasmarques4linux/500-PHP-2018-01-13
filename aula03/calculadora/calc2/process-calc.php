<?php 

if (!empty($_POST)) {
			
			// Capturo a request
			$request = filter_input(INPUT_SERVER, 'REQUEST_METHOD');

			if ($request === 'POST') {
				$num1 = (int) filter_input(INPUT_POST,'num1');
				$num2 = (int) filter_input(INPUT_POST,'num2');
			}

			// if ($num1 != 0 || $num2 != 0) {
				
			// 	if (empty($num1) || empty($num2)) {
			// 		echo "Número em branco";
			// 		die();
			// 	}				
			// }


			if (!is_int($num1) || !is_int($num2)) {
				echo "Digite um número válido";
				die();
			}
			function soma (int $num1,int $num2){
				return $num1+$num2;
			}

			function subtrai (int $num1,int $num2){
				return $num1-$num2;
			}

			function divide (int $num1,int $num2){
				if ($num1 === 0) {
					return "Proibido divisão por 0";
				}
				return $num1/$num2;
			}

			function multiplica (int $num1,int $num2){
				return $num1*$num2;
			}

			echo "<p>" .soma($num1,$num2) . "</p>";
			echo "<p>" .subtrai($num1,$num2) . "</p>";
			echo "<p>" .divide($num1,$num2) . "</p>";
			echo "<p>" .multiplica($num1,$num2) . "</p>";
		}