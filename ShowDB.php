<html>
<head>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabelas</title>
    <link rel="stylesheet" href="style.min.css">
	
</head>

<body>


</form>

<?php
include_once 'conexao_maripeles.php';
echo "<meta name = 'description' content = 'Ver todas as palavras adicionadas ao glossário'>";
echo"<p><title>Todas as palavras</title></p>";

$sql = ("select * from dicionario");


	echo'<table class="rTable">';
	echo "<tr>";
	echo "<th>Palavra</th>";
	echo "<th>Sigla</th>";
	echo "<th>Classe gramatical</th>";
	echo "<th>Tradução literal</th>";
	echo "<th>Tradução aplicada</th>";
	echo "</tr>";
$numrow = pg_query($conexao,$sql);



while ($row = pg_fetch_array($numrow)) {
        $ptermo = $row['palavra_termo'];
        $sigla = $row['sigla'];
        $cgramatical = $row['classe_gramatical'];
        $tliteral = $row['traducao_literal'];
        $taplicada = $row['traducao_aplicada'];
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
			echo "</tr>";

    }



?>
</body>
</html>