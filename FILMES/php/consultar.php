<html>

<head>

	<meta charset = "utf-8">
	<link rel = "stylesheet" href = "../css/estilo.css">
	
</head>

<body>

	<header>
	</header>
	<section>

		<?php 
			session_start();
			
			$servidor = '127.0.0.1';
			$usuario = 'root';
			$senha = '';
			$banco = 'filmesbd';
			$consultar = "SELECT * FROM filmes";
			
			$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
			$resposta = mysqli_query($conexao, $consultar);
			
						
			echo "<table>";
			echo "<tr><td>NOME</td><td>GÊNERO</td><td>ANO</td><td>NOTA</td></tr>";
			
			while ($resultado = mysqli_fetch_assoc($resposta)){
				
				
				echo "<tr>";
				echo "<td>".$resultado['nome']."</td>";
				echo "<td>".$resultado['genero']."</td>";
				echo "<td>".$resultado['ano']."</td>";
				echo "<td>".$resultado['nota']."</td>";
				echo "</tr>";
				
			
			}
			
			echo "</table>";
			
			
			
			
		?>
		
		
		<a href = "../index.html">Menu Principal</a>
		

	</section>
	
	<footer>
	</footer>
	
</body>