<?php 

$host 	= 'localhost';
$port 	= '5432';
$dbname = 'aula04';
$user 	= 'lucas';
$pass 	= '123';

$con_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";


$con = pg_connect($con_string);