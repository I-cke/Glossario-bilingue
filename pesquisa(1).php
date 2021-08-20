<?php
include_once 'conexao_maripeles.php';
$searchq = strtoupper($_POST['search']);
echo "<!DOCTYPE html>";
echo '<html lang="pt-br">';
echo "<head>";
echo "<title>Formulário HTML</title>";
echo '<meta charset="utf-8"/>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
echo "</head>";
echo "<body>";



  echo "<table border=1>";
  echo "<tr>";
  echo "<th>Palavra</th>";
  echo "<th>Sigla</th>";
  echo "<th>Classe gramatical</th>";
echo '<meta charset="utf-8"/>';  
  echo "<th>Tradu&ccedil;&atilde;o literal</th>";
  echo "<th>Tradu&ccedil;&atilde;o aplicada</th>";
   echo "<th>Data</th>";
  echo "<th>Criador</th>";
  echo "<th>Hora</th>";
 echo "</tr>";



  /*$sql = ("SELECT * FROM dicionario WHERE palavra_termo LIKE '%$searchq%' OR sigla LIKE '%$searchq%' OR classe_grmatical LIKE '%$searchq%' OR traducao_literal LIKE '%$searchq%' OR traducao_aplicada LIKE '%$searchq%'");*/
  $sql = ("select * from dicionario where upper(palavra_termo) like '%$searchq%';");
/* $sql = ("select * from mobile_produtos where emp_produtos = '$emp_produtos'"); */
	/*$sql = ("select * from dicionario where upper(palavra_termo) like '$searchq%'");*/

$numrow = pg_query($conexao,$sql);


while ($row = pg_fetch_array($numrow)) {
        $ptermo = $row['palavra_termo'];
        $sigla = $row['sigla'];
        $cgramatical = $row['classe_gramatical'];
        $tliteral = $row['traducao_literal'];
        $taplicada = $row['traducao_aplicada'];
		$data = $row['data'];
		$criador = $row['criador'];
		$hora = $row['hora'];
		/* print $row[5];
		echo "\n";	 */

        /* print = '<div>' .$ptermo '' .$sigla '' .$cgramatical '' .$tliteral '' $taplicada '</div>'; */
       /* echo '<input name="nome" type="text" id="nome" value='.$row[1]   .$row[2] .'>' ;*/
        /* print  $row[1]; */
		/* echo "<br>"; */

		    echo "<tr>";
		    echo "<td>".$row[1]."</td>";
		    echo "<td>".$row[2]."</td>";
		    echo "<td>".$row[3]."</td>";
		    echo "<td>".$row[4]."</td>";
			echo "<td>".$row[5]."</td>";
			echo "<td>".$row[6]."</td>";
			echo "<td>".$row[7]."</td>";
			echo "<td>".$row[8]."</td>";
			echo "</tr>";

    }
echo  "<a href='index.html'><h3>Home</h3><a/>";
echo "</body>";
echo "</html>";

$conexao = pg_connection_reset();

?>