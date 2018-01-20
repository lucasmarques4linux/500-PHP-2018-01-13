<?php 

echo "<pre>";

$var1 = "10";
$var2 = "8";
$var3 = "6";
$var4 = 10;

var_dump( $var1 == $var2);
echo "<hr>";
var_dump( $var1 == $var4);
echo "<hr>";
var_dump( $var1 === $var4);
echo "<hr>";
var_dump( $var1 != $var2);
echo "<hr>";
var_dump( $var1 != $var4);
echo "<hr>";
var_dump( $var1 !== $var4);
echo "<hr>";
var_dump( $var1 > $var2);
echo "<hr>";
var_dump( $var1 >= $var4);
echo "<hr>";
var_dump( $var1 < $var4);
echo "<hr>";
var_dump( $var1 <= $var4);
echo "<hr>";
var_dump((11 % 2) === 0);