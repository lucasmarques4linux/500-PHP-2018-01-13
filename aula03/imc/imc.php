<?php 

if (!empty($_POST)) {
	

	$request = filter_input(INPUT_SERVER, 'REQUEST_METHOD');

	if ($request === 'POST') {
		$peso = (float) filter_input(INPUT_POST,'peso');
		$altura = (float) filter_input(INPUT_POST,'altura');
	}

	$math = $peso / ($altura * $altura);
	$imc  = round($math, 2);

	if($imc <= 17){
		echo 'Muito abaixo do peso.';
	}elseif($imc < 18.49){
		echo 'Abaixo do peso.';
	}elseif($imc <= 24.99){
		echo 'Peso normal.';

	}elseif($imc <= 29.99){
		echo 'Acima do peso.';

	}elseif($imc <= 34.99){
		echo 'Obesidade I.';

	}elseif($imc <= 39.99){
		echo 'Obesidade II (severa).';

	}elseif($imc > 40){
		echo 'Obesidade III (mórbida).';
	}

}