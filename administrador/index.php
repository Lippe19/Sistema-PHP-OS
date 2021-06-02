<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Exportar Banco de Dados</title>
	</head>
	<body>
		<h1>Exportar base de dados</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo "<p>".$_SESSION['msg']."</p>";
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php" enctype="multipart/form-data">
			<input type="hidden" name="servidor" value="localhost" placeholder="Nome do servidor"><br>
			<input type="hidden" name="usuario" value="root" placeholder="Nome do usuário"><br>
			<input type="hidden" name="senha" value="" placeholder="Senha da base de dados"><br>
			<input type="hidden" name="dbname" value="inter" placeholder="Nome da base de dados"><br>
			<input type="submit" value="Exportar">
		</form>
	</body>
</html>