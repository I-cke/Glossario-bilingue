<?php
include_once 'conexao_maripeles.php';
$id =  $_GET["id"];
	
	echo("acho");

// $sql = "delete from dicionario where id = '$id'");
$sql="delete from dicionario where id = '$id'";

 pg_query($conexao,$sql); 
  

$conexao = pg_connection_reset();

?>