
<?php
	include_once 'conexao_maripeles.php';
	$id = $_POST['edt_id'];
	$sql = "delete from dicionario where id = '$id'";
	//"INSERT INTO dicionario VALUES ('$id','$palavra_termo','$sigla','$classe_gramatical','$traducao_literal','$traducao_aplicada')"; 
	
	pg_query($conexao,$sql);
	
	echo "$id";
?>