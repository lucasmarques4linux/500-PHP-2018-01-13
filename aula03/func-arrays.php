<?php 

echo "<pre>";

$data = "27/01/2018";
var_dump(explode('/', $data));
echo "<br>";
$arrData = explode('/', $data);
var_dump(implode('-', $arrData));

echo "<hr>";

$array = ['a','c','g','b','d'];
print_r($array);
asort($array);
print_r($array);

echo "<hr>";
$array = ['a' => 0,'c' => 1,'g' => 2,'b' => 3,'d' => 4];
print_r($array);
ksort($array);
print_r($array);


echo "<hr>";

$array = ['a','c','g','b','d'];
print_r($array);
sort($array);
print_r($array);

echo "<hr>";
$nomes = ['Lucas','João', 'Maria'];
sort($nomes);
print_r($nomes);

echo "<hr>";

function cubo($num){
	return $num * $num * $num;
}


$nums = [1,2,3];

foreach ($nums as $num) {
	echo cubo($num);
	echo "<br>";
}

$cubo = array_map('cubo', $nums);
$quadrado = array_map(function ($num){ 
return $num * $num;
}, $nums);
print_r($cubo);
print_r($quadrado);

echo "<hr>";

function par($num){
	return ($num % 2 == 0 ) ? $num : '';
}
function impar($num){
	return ($num % 2 != 0 ) ? $num : '';
}


$vetor = [1,2,3,4];

echo "Pares: <br>";
print_r(array_filter($vetor,'par'));
echo "Ímpares: <br>";
print_r(array_filter($vetor,'impar'));

echo "<hr>";

$array = ['a','b','c','d','e'];
print_r($array);
print_r(array_chunk($array, 2));

echo "<hr>";

$chaves = [1,2,3];
$valores = ['a','b','c'];
$array = array_combine($chaves,$valores);

print_r($array);

echo "<hr>";

$arr1 = ['a','b','v'];
$arr2 = ['b','a','c'];
$diff = array_diff($arr1, $arr2);
print_r($diff);

echo "<hr>";

$arr1 = [
	"cor" => "verde",
	"nome" => "João",
	"0"	=> 2,
	"1" =>5
];
$arr2 = ["nome" => 'Lucas', 10];

$merge = array_merge($arr1,$arr2);

print_r($merge);

echo "<hr>";

$pessoa = ['nome' => '4Linux', 'idade' => 11];

if (array_key_exists('nome', $pessoa)) {
	echo 'ok';
}

echo "<hr>";

$pessoa = ['nome' => '4Linux', 'idade' => 11];

$chave = array_search('4Linux', $pessoa);
echo $chave;

echo "<hr>";

$pessoa = ['nome' => '4Linux', 'idade' => 11];

if (in_array(11, $pessoa)) {
	echo 'encontrou';
}

echo "<hr>";

$arr = [1,2,3,2,5,4];
$unico = array_unique($arr);
print_r($unico);

echo "<hr>";

$arr = ['aaa' => 'a','bbb' => 'c','ccc' => 'a','ddd' => 'c'];
$unico = array_unique($arr);
print_r($unico);

echo "<hr>";

$arr = [1,2,3,2,5,4];
echo count($arr);

echo "<hr>";

foreach ($arr as $num) {
	echo $num . '<br>';
}
echo "<hr>";
for ($i=0; $i < count($arr) ; $i++) { 
	echo $arr[$i] ."<br>";
}

echo "<hr>";

$arr = [
	'Luke',
	'Leia',
	'Han Solo',
	[ 'Vader', 'Kylo Ren'
	]
];

// print_r (serialize($arr));

// echo "<hr>";

// $string = "Luke, Leia, Han Solo";

// print_r (unserialize($string));