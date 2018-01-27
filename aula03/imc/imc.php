<?php 

if (!empty($_POST)) {
	

	$request = filter_input(INPUT_SERVER, 'REQUEST_METHOD');

	if ($request === 'POST') {
		$peso = (float) filter_input(INPUT_POST,'peso');
		$altura = (float) filter_input(INPUT_POST,'altura');
	}


	function calculaImc($peso, $altura){
		
		$imc = $peso / ($altura * $altura);
		return $imc;
	}
	function exibe($imc){
		if($imc <= 17){
		return 'Muito abaixo do peso.';
	}elseif($imc < 18.49){
		return 'Abaixo do peso.';
	}elseif($imc <= 24.99){
		return 'Peso normal.';

	}elseif($imc <= 29.99){
		return 'Acima do peso.';

	}elseif($imc <= 34.99){
		return 'Obesidade I.';

	}elseif($imc <= 39.99){
		return 'Obesidade II (severa).';

	}elseif($imc > 40){
		return 'Obesidade III (mórbida).';
	}
	}


	$imc = round(calculaImc($peso, $altura),2);

	$msg = exibe($imc);

	echo $msg;

}