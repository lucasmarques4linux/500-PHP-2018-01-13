<?php 

require_once 'conexao.php';

$query = "SELECT * FROM usuarios";

$result = pg_query($query);

$arr = pg_fetch_all($result);

echo "<pre>";
var_dump($arr);