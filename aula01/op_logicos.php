<?php 

echo "<pre>";

$true = true;
$false = false;

var_dump($true and $false);
echo "<hr>";
var_dump($true and $true);
echo "<hr>";
var_dump($false and $false);
echo "<hr>";
echo "<hr>";

var_dump($true && $false);
echo "<hr>";
var_dump($true && $true);
echo "<hr>";
var_dump($false && $false);
echo "<hr>";
echo "<hr>";

var_dump($true or $false);
echo "<hr>";
var_dump($true or $true);
echo "<hr>";
var_dump($false or $false);
echo "<hr>";
echo "<hr>";

var_dump($true || $false);
echo "<hr>";
var_dump($true || $true);
echo "<hr>";
var_dump($false || $false);
echo "<hr>";
echo "<hr>";

var_dump($true xor $false);
echo "<hr>";
var_dump($true xor $true);
echo "<hr>";
var_dump($false xor $false);
echo "<hr>";
echo "<hr>";

var_dump(!$true);
echo "<hr>";
var_dump(!$false);