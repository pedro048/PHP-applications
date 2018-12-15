<?php

include_once("conexao.php");

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select id_usuario, senha from usuarios where nome = '{$nome}' and senha = '{$senha}'";
$result = mysqli_query($conexao,$query); 
$row = mysqli_num_rows($result);

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
				<h1>Perfil do Usuario</h1>
				<br><br><br>
			
				<?php
					if($result){
						echo "deu certo";
					}else{
						echo "deu errado";
					}
				?>
			</section>
		</div>
	</body>
</html>	