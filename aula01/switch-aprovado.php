<?php 

$nota = 3;
$frequencia = 9;

switch (true) {
	case ($nota >= 7 && $frequencia >= 8):
		echo "aprovado";
		break;
	case (($nota >= 5 && $nota < 7):
		echo "recuperacao";
		break;
	case ($nota < 5 && $frequencia < 8):
		echo 'reprovado';
		break;
	default:
		# code...
		break;
}