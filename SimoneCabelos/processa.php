
<?php

	include_once("conexao.php");

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = "insert into usuarios(nome, email, senha) values ('$nome','$email','$senha')";
	$salvar = mysqli_query($conexao,$sql);
	$linhas = mysqli_affected_rows($conexao);

	mysqli_close($conexao);
	
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title center >Sistema de Cadastro</title>
		<link rel="stylesheet" href="_css/estilo.css">
	</head>
	<body>
		<div class = "container">
			<nav>
				<ul class = "menu">
					<a href="index.php"><li>Cadastro</li></a>
					<a href="consultas.php"><li>Login</li></a>
				</ul>
			</nav>
			<section>
				<h1>Confirmação de Cadastro</h1>
				<br><br><br>
			
				<?php
					if($linhas==1){
						echo "Usuário cadastrado com sucesso!!!";
					}else{
						echo "Falha no cadastro, tente novamente depois";
					}
				?>
			</section>
		</div>
	</body>
</html>	