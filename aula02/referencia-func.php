<?php 

$num = 0;

function add(&$num){
	$num++;
}

add($num);

echo $num;