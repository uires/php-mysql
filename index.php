<?php include("cabecalho.php"); 
//include("tela-login.php");
?>







	<link href="css/loja.css" rel="stylesheet">
	<h1 class>Bem vindo!</h1>
	
	<form action="tela-login.php" method="post">
		<table class="table">
			
			<tr>			
				<td>Email: </td> 
				<td><input class="form-control" type="text" name="email"></td>
			</tr>
			<tr>	
				<td>Senha: </td>
				<td><input class="form-control" type="password" name="senha"></td>
			</tr>
			<tr>
				<td><button class= "btn btn-primary" type="submit">Logar</button></td>
			</tr>

		</table>
	</form>
	


<?php if(isset($_GET["tela-login"]) && $_GET["tela-login"] == true) {?>
	<p class="alert-success">Logado com sucesso</p>
<?php
}else {
	
	if (isset($_GET["tela-login"]) && $_GET["tela-login"] == false){?>
		<p class= "alert-danger">Usuário ou senha inválido</p>
		<?php
	}
}
?> 






















<?php include("rodape.php"); ?>	       	