<?php include("cabecalho.php"); 
//include("tela-login.php");
?>






<?php if(isset($_COOKIE["user_login"])AND empty($_COOKIE["user_login"]) == false){ ?>
		<p class="alert-success"> Você está logado como <?=$_COOKIE["user_login"]?></p>
	<?php
	}else{
	?>


	<link href="css/loja.css" rel="stylesheet">
	<h1 class>Olá, para ter acesso ao formulário de adicionar e ou listagem de produtos, você precisa logar!</h1>
	
	<form action="tela-login.php" method="post">
		<table class="table">
			
			<tr>			
				<td>Email: </td> 
				<td><input class="form-control" type="text" name="email"></td>
			</tr>
			<tr>	
				<td>Senha:<br> </td>
				<td><input class="form-control" type="password" name="senha"></td>
			</tr>

			<tr>
				<td><button class= "btn btn-primary" type="submit">Logar</button></td>
			</tr>

		</table>
	</form>
	<?php
	}
	?>


<?php 
if(isset($_GET["tela-login"]) && $_GET["tela-login"] == true) {?>
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
