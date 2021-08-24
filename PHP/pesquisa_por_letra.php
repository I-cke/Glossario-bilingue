<html>
	<head>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.min.css">
	</head>
	
	<body>
	<a href = 'index.html'><h3>Home</h3></a>
		<?php
		include_once 'conexao_maripeles.php';
		/*
		$searchq = strtoupper($_POST['search']);
		*/
		
		if (isset($_POST["btn_a"])){
	
			$sql = ("select * from dicionario where palavra_termo like 'a%' or palavra_termo like 'A%' or sigla like 'a%' or sigla like 'A%'");
		
		}
		if (isset($_POST["btn_b"])){
			$sql = ("select * from dicionario where palavra_termo like 'b%' or palavra_termo like 'B%'");
		}
		if (isset($_POST["btn_c"])){
			$sql = ("select * from dicionario where palavra_termo like 'c%' or palavra_termo like 'C%'");
		}
		if (isset($_POST["btn_d"])){
			$sql = ("select * from dicionario where palavra_termo like 'd%' or palavra_termo like 'D%'");
		}
		if (isset($_POST["btn_e"])){
			$sql = ("select * from dicionario where palavra_termo like 'e%' or palavra_termo like 'E%'");
		}
		if (isset($_POST["btn_f"])){
			$sql = ("select * from dicionario where palavra_termo like 'f%' or palavra_termo like 'F%'");
		}
		if (isset($_POST["btn_g"])){
			$sql = ("select * from dicionario where palavra_termo like 'g%' or palavra_termo like 'G%'");
		}
		if (isset($_POST["btn_h"])){
			$sql = ("select * from dicionario where palavra_termo like 'h%' or palavra_termo like 'H%'");
		}
		if (isset($_POST["btn_i"])){
			$sql = ("select * from dicionario where palavra_termo like 'i%' or palavra_termo like 'I%'");
		}
		if (isset($_POST["btn_j"])){
			$sql = ("select * from dicionario where palavra_termo like 'j%' or palavra_termo like 'J%'");
		}
		if (isset($_POST["btn_k"])){
			$sql = ("select * from dicionario where palavra_termo like 'k%' or palavra_termo like 'K%'");
		}
		if (isset($_POST["btn_l"])){
			$sql = ("select * from dicionario where palavra_termo like 'l%' or palavra_termo like 'L%'");
		}
		if (isset($_POST["btn_m"])){
			$sql = ("select * from dicionario where palavra_termo like 'm%' or palavra_termo like 'M%'");
		}
		if (isset($_POST["btn_n"])){
			$sql = ("select * from dicionario where palavra_termo like 'n%' or palavra_termo like 'N%'");
		}
		if (isset($_POST["btn_o"])){
			$sql = ("select * from dicionario where palavra_termo like 'o%' or palavra_termo like 'O%'");
		}
		if (isset($_POST["btn_p"])){
			$sql = ("select * from dicionario where palavra_termo like 'p%' or palavra_termo like 'P%'");
		}
		if (isset($_POST["btn_q"])){
			$sql = ("select * from dicionario where palavra_termo like 'q%' or palavra_termo like 'Q%'");
		}
		if (isset($_POST["btn_r"])){
			$sql = ("select * from dicionario where palavra_termo like 'r%' or palavra_termo like 'R%'");
		}
		if (isset($_POST["btn_s"])){
			$sql = ("select * from dicionario where palavra_termo like 's%' or palavra_termo like 'S%'");
		}
		if (isset($_POST["btn_t"])){
			$sql = ("select * from dicionario where palavra_termo like 't%' or palavra_termo like 'T%'");
		}
		if (isset($_POST["btn_u"])){
			$sql = ("select * from dicionario where palavra_termo like 'u%' or palavra_termo like 'U%'");
		}
		if (isset($_POST["btn_v"])){
			$sql = ("select * from dicionario where palavra_termo like 'v%' or palavra_termo like 'V%'");
		}
		if (isset($_POST["btn_w"])){
			$sql = ("select * from dicionario where palavra_termo like 'w%' or palavra_termo like 'W%'");
		}
		if (isset($_POST["btn_x"])){
			$sql = ("select * from dicionario where palavra_termo like 'x%' or palavra_termo like 'X%'");
		}
		if (isset($_POST["btn_y"])){
			$sql = ("select * from dicionario where palavra_termo like 'y%' or palavra_termo like 'Y%'");
		}
		if (isset($_POST["btn_z"])){
			$sql = ("select * from dicionario where palavra_termo like 'z%' or palavra_termo like 'Z%'");
		}
		echo'<table class="rTable">';
		echo "<tr>";
		echo "<th>Palavra</th>";
		echo "<th>Sigla</th>";
		echo "<th>Tradução literal</th>";
		echo "<th>Tradução aplicada</th>";
		echo "<th>Data</th>";
		echo "<th>Criador</th>";
		echo "<th>Hora</th>";
		echo "</tr>";
		$numrow = pg_query($conexao,$sql);
		while ($row = pg_fetch_array($numrow)) {
		
			$ptermo = $row['palavra_termo'];
			$sigla = $row['sigla'];
			$cgramatica = $row['classe_gramatical'];
			$tliteral = $row['traducao_literal'];
			$taplicada = $row['traducao_aplicada'];
			$data = $row['data'];
			$criador = $row['criador'];
			$hora = $row['hora'];
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
		?>
	<body>

</html>