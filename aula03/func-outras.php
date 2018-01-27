<?php 

echo "<pre>";

$senha = '123';

print_r(md5($senha));
echo "<br>";
print_r(md5($senha));
echo "<br>";
print_r(md5($senha));

echo "<hr>";

$senha = '123';

print_r(sha1($senha));
echo "<br>";
print_r(sha1($senha));
echo "<br>";
print_r(sha1($senha));

echo "<hr>";

$senha = '123';

print_r(hash('md5',$senha));
echo "<br>";
print_r(hash('sha1',$senha));

echo "<hr>";

$pass = '202cb962ac59075b964b07152d234b70';
$senha = '123';

if ($pass === md5($senha)) {
	echo "logado";
}

$pass = md5($senha);
$cesar = 5;