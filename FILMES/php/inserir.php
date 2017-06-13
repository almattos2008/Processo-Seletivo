<html>

<head>
	
	<meta charset= "utf-8">
	<link rel = "stylesheet" href = "css/estilo.css">
	
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
			
			$nome = $_POST['nome'];
			$genero = $_POST['genero'];
			$ano = $_POST['ano'];
			$nota = $_POST['nota'];

			if ($_POST['nome'] != "" || $_POST['genero'] != "" || $_POST['ano'] != "" || $_POST['nota'] != ""){
				$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
				$inserir = "INSERT INTO filmes VALUES ('{$nome}', '{$genero}', {$ano}, {$nota})";
				
				mysqli_query($conexao, $inserir);
				
			} else{
			
				echo 'Erro ao inserir dados, tente novamente.';
				
			}
			
			
			
		?>

	<a href = "../index.html">Menu Principal</a>
	
	</section>

	<footer>
	</footer>

</body>

</html>