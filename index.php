<?php include("cabecalho.php"); 
//include("tela-login.php");
include("conecta.php");
?>

	<link href="css/loja.css" rel="stylesheet">
	<h1 class>Bem vindo!</h1>
	
	<form action="tela-login.php" method="post">
		<table class="table">
			
			<tr>			
				<td>Email: </td> 
				<td><input class="form-control" type="text" name="usuario-login-email"></td>
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
	

<?php
// teste 
$a = array(3, 12301, 11, 420);
echo "soma(a) = ".array_sum($a)."\n";
?>

	

<?php include("rodape.php"); ?>
	       	