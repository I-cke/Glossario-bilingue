<html>
<head>

</head>

<body>
<?php
/* include_once 'conexao_maripeles.php'; */
include_once 'conexao_maripeles.php';
/*
$id = $_POST['edt_id'];
*/
$palavra_termo = $_POST['edt_palavra_termo'];
$sigla = $_POST['edt_sigla'];
$classe_gramatical = $_POST['edt_classe_gramatical'];
$traducao_literal = $_POST['edt_traducao_literal'];
$traducao_aplicada = $_POST['edt_traducao_aplicada'];

echo "<br />\n";
echo"<a href='index.html'><h3>Home</h3><a/>";
echo "<br />\n";


$sql = ("select id from dicionario order by id desc limit 1");

$numrow = pg_query($conexao,$sql); 




echo "<br />\n";
 $row = pg_fetch_row($numrow);
 $id = $row[0] + 1;	
 

 
 $sql = ''; 
 $sql = "INSERT INTO dicionario VALUES ('$id','$palavra_termo','$sigla','$classe_gramatical','$traducao_literal','$traducao_aplicada')"; 
 echo $sql;
 pg_query($conexao,$sql); 
  

$conexao = pg_connection_reset();
echo "<br />\n";
echo "Conexao fechada com sucesso"; 

?>
</body>
</html>