<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Login</title>
	
	<script type = "text/javascript" src = "js/jquery-3.4.1.min.js"></script>
	<script type = "text/javascript">

	$('document').ready(function(){
		$('body').hide();
		$('body').fadeIn('slow');
	});

	</script>
	<script type = "text/javascript">
		function Create(){
			<?php
				$server = "localhost";
				$user = "root";
				$pass = "";
				$dbname = "mercadinho";

				$username = $_POST['username'];

				$conexao = new mysqli($server,$user,$pass,$dbname);

				if($conexao->connect_error){
					echo "Algo de errado nao esta certo!";
				}

				
			?>
	  }
	</script>
	<script type = "text/javascript">
		function Login(){
			<?php
				$server = "localhost";
				$user = "root";
				$pass = "";
		  		$dbname = "mercadinho";

				$username = $_POST['username'];
				$password = $_POST['password'];

				$conexao = new mysqli($server,$user,$pass,$dbname);

				if($conexao->connect_error){
					echo "Algo de errado nao esta certo!";
				}

				$sign = "INSERT INTO login(user,pass) VALUES('$username','$password');";

				$create = "CREATE TABLE '$username'(cod INT PRIMARY KEY AUTO, nome_prod VARCHAR(20) NOT NULL, preco DECIMAL(10,2) NOT NULL, categ VARCHAR(20) NOT NULL);";
				
		  		if($conexao->query($sign)===TRUE) {
					$sucesso = "Cadastro feito com sucesso!";
				}else{
					$sucesso = "Tente outro nome de usuário";
				}
			?>
		}
	</script>
	<script>
		function Alerta(){
			var log = "<?php echo $sucesso; ?>"
			alert(log);
		}
	</script>
</head>

<body style="font-family: Segoe UI; background-color: #FFF046">
	<div class = "jumbotron text-center">
		<h1>Cadastre-se</h1>
	</div>
	<div class = "container-fluid">
		<form action= "login.php" method= "POST">
			<div class="row">
				<div class = "col-4"></div>
				<div class = "col-4 text-center ">
					Nome de usuário:<br>
					<input name="username" id="" class="form-control" type="text"><br>
				</div>
			</div>
			<div class="row">
				<div class = "col-4"></div>
				<div class = "col-4 text-center">
					Senha:<br>
					<input name="password" id="" class="form-control" type="password"><br>
				</div>
				</div>
			</div>
			<div class = "row">
			  <div class = "col-4"></div>
			  <div class = "col-4 text-center">
				<a onclick="Login()"><input onclick = "Alerta()" type="submit" value="Cadastrar" class = "btn btn-secondary"></a><br><br><br><br>

							</div>
			</div>
		</form>
		<form action="home.php" method = "POST" class = "text-center">
			<input type = "submit" class = "btn btn-secondary" value = "Voltar à Home">
		</form>
	</div>
</body>
</html>