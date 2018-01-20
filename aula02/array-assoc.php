<?php 

echo "<pre>";

$pessoa = [
	'nome' => 'Lucas',
	'sobrenome' => 'Marques',
	'idade' => 24,
	'email' => 'lucas.marques@4linux.com.br',
	'altura' => 1.80,

];

print_r($pessoa);

echo "<hr>";
echo $pessoa['nome']."<br>";
echo $pessoa['sobrenome']."<br>";
echo $pessoa['idade']."<br>";

echo "<hr>";

foreach ($pessoa as $key => $value) {
	echo $key . '-->'. $value."<br>";
	if (($key == 'idade') && ($value >= 18)) {
		echo "maior idade <br>";
	};
}

echo "<hr>";

foreach ($pessoa as $valores) {
	echo $valores."<br>";
}
