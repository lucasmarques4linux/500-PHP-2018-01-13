<?php 

echo "<pre>";

$artilheiro = "Ronaldo";
$gols = 9;

$texto = 'O artilheiro do campeonato, %s tem %d gols';

printf($texto,$artilheiro,$gols);

echo "<hr>";

$artilheiro = "Ronaldo";
$gols = 9;

$texto = 'O artilheiro do campeonato, %s tem %d gols';

$msg = sprintf($texto,$artilheiro,$gols);

echo $msg;

echo "<hr>";

$texto = 'Olá Mundo,Olá,Olá';
echo str_replace('Olá', 'Tchau', $texto);
echo "<br>";

$msg = 'Olá';
echo str_replace('á', 'a', $msg);

echo "<br>";

$pessoa = ['nome' => 'Maria', 'sexo' => 'f'];

$msg = "olá menino $pessoa[nome]";

if($pessoa['sexo'] == 'f'){
	$msg = str_replace('menino', 'menina', $msg);
}

echo $msg;

echo "<hr>";

$string = '         PHP       ';
$login = 'lucas.marques@4linux.com.br ';
var_dump($string);
var_dump(trim($string));
var_dump(trim($login));

echo "<hr>";
$string = 'ola mundo';
echo ucfirst($string);

echo "<hr>";
$string = 'ola mundo';
echo ucwords($string);

echo "<hr>";
$string = 'Ola Mundo';
echo lcfirst($string);

echo "<hr>";
$email = 'linus@linux.org';
$dominio = strstr($email, '@');
echo $dominio;
echo "<br>";
$user = strstr($email, '@', true);
echo $user;

echo "<hr>";
$string = '  Olá Mundo!      ';
echo strlen(trim($string));

echo "<hr>";

$string = "123456789";
$procurar = "125";

$pos = strpos($string, $procurar);
var_dump($pos);

echo "<hr>";
$string = '0123456789';
echo substr($string, 2);
echo '<br>';
$qtd = strlen($string) - 2;
echo substr($string, 0,-strlen($string) - 2);

echo "<hr>";
$string = 'hoje eu acordei cedo.';

echo substr_replace($string, 'tarde', -9,-1);

echo "<hr>";
$string = "Ola Mundo";
echo strtoupper($string);

echo "<hr>";
$string = "Ola Mundo";
echo strtolower($string);

echo "<hr>";

$string = 'JOSE MARIA';
echo ucwords(strtolower($string));