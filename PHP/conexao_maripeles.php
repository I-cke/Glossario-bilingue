<?php
$conexao=pg_connect("host=localhost dbname=glossario_informatica user=postgres password=@Pos_987# port=5532");
if(!$conexao){
echo"Falha na conexão com o banco. Veja detalhes técnicos:";
}

/*echo "conectado";*/
/*
pg_query($conexao, "INSERT INTO estados (id,sigla,nome_uf) VALUES ('1502','jg','ESTADO ALEATORIO novo')");
echo "<br />\n";
echo "Registro inserido com sucesso";

$conexao = pg_connection_reset();
echo "<br />\n";
echo "Conexao fechada com sucesso";
*/

?>