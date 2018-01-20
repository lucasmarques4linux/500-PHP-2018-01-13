<?php 

$idade = 20;
$temHabilitacao = true;

if ($idade >= 18 && $temHabilitacao) 
{
	echo "Pode dirigir";
} 
elseif ($idade >= 18 && !$temHabilitacao) 
{
	echo "Não pode dirigir, mas pode se habilitar";
} else {
	"Não pode dirigir e nem se habilitar";
}