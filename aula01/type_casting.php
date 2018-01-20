<?php 

$var = 10;

$boolean = (boolean) $var;
var_dump($boolean);
echo "<hr>";

// $var = "b";
$int = (int) $var;
var_dump($int);
echo "<hr>";

$float = (float) $var;
var_dump($float);
echo "<hr>";

$string = (string) $var;
var_dump($string);
echo "<hr>";

$object = (object) $var;
var_dump($object);
echo "<hr>";

$null = (unset) $var;
var_dump($null);
echo "<hr>";

$binary = (binary) $var;
var_dump($binary);
echo "<hr>";