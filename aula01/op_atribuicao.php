<?php 

echo "<pre>";

$nome = "Lucas";
$idade = 24;

$idade = $idade + 1;

$idade += 2;
var_dump($idade);
$idade -= 2;
var_dump($idade);
$idade *= 2;
var_dump($idade);
$idade /= 2;
var_dump($idade);

echo "<hr>";

$var = 0;
$var++;
$var++;
var_dump($var);
$var--;
$var--;
var_dump($var);

echo "<hr>";

$var = 1;

var_dump($var++);
var_dump($var);

var_dump(++$var);
var_dump($var);

var_dump($var--);
var_dump($var);

var_dump(--$var);
var_dump($var);