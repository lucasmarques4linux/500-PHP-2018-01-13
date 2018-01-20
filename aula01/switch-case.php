<?php 

$idade = 20;

switch (true) {
	case ($idade > 18 && $idade <=25):
			echo "Jovem";
		break;
	case ($idade >13 && $idade <=18):
			echo "Adolescente";
		break;
	case ($idade > 25):
			echo "Adulto";
		break;	
	default:
		echo "Não sei a idade";
		break;
}