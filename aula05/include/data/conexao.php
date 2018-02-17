<?php 

$host 	= 'localhost';
$port 	= '5432';
$dbname = 'dexterescola';
$user 	= 'lucas';
$pass 	= '123';

$con_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";


function conecta(){
	global $con_string;
	return pg_connect($con_string);	
}


function desconecta($con){
	pg_close($con);
}
