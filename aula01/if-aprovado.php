<?php 

$nota = 10;
$frequencia = 7;

if ($nota >= 7 && $frequencia >= 8) 
{
	echo "aprovado";
} 
else if (($nota >= 5 && $nota < 7) && $frequencia >= 8)
{
	echo "recuperacao";
} 
else if ($nota < 5 || $frequencia < 8) 
{
	echo 'reprovado';
}