<html>
<head>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabelas</title>
    <link rel="stylesheet" href="style.min.css">
</head>

<body>
<!--
<form action = "delete.php" method = "POST">
	<!--
    <input type="text"name="edt_id" value='//' >

	<btn_ovr>
</form
-->

<?php
include_once 'conexao_maripeles.php';
echo "<meta name = 'description' content = 'Pesquisar por palavras'>";
echo"<p><title>Pesquisa</title></p>";

echo "<a href='index.html'><h3>Home</h3><a/>";
$searchq = strtoupper($_POST['search']); 
if(!$searchq){
	echo '<script type = "text/javascript">alert("Nenhum registro localizado com essa palavra");</script>'; 
	echo '<script>window.location= "index.html" </script>';

} else {

$sql = ("select * from dicionario where upper(palavra_termo) like '$searchq%' or upper(sigla) like '$searchq%'");



	

$numrow = pg_query($conexao,$sql);


	



	echo'<table class="rTable">';
	echo "<tr>";
	echo "<th>Palavra</th>";
	echo "<th>Sigla</th>";
	echo "<th>Classe gramatical</th>";
	echo "<th>Tradução literal</th>";
	echo "<th>Tradução aplicada</th>";
	echo "</tr>";




while ($row = pg_fetch_array($numrow)) {
		/*
		if(!$searchq){
		echo"error";
		break;
		}
		*/
		$id = $row['id'];
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
		$id =  $row['id'];
     echo "<td><a href='excluir.php?id=$id'>Excluir</a></td>"; 
			//echo "<td><a href=excluir.php?edt_id=" .$row[0].">Excluir<a/></td>";
			//echo "<a href=\"".$variavel."\">Texto</a>";
//		    echo "<td><a href= "excluir.php?edt_id=".$row[0]><a/></td>";
		//	echo "<td><a href="excluir.php?edt_id='" . $row[0] . "'>Excluir<a/></td>";
	      //echo "<td><a href="excluir.php?edt_id=" . $row[0] . "'>Excluir</a></td>";
		//	 echo      "<a href=\"para_onde_vai_apontar_o_link\">Texto do Link<a/>";
			//echo"<td><a href='excluir.php'>Excluir</a></td>";		
	
			echo "</tr>";
			
    
	}		
	
}
?>

</body>
</html>