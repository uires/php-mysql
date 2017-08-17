<?php
include("conecta.php");
include("banco_usuarios.php");


$usuario = buscarUsuario($conexaoComOBancoDeDados, $_POST["email"], $_POST["senha"]);
setcookie("user_login", $usuario["email"]);
var_dump($usuario);
if($usuario == null){
	header("Location: index.php?tela-login=0");
}else{
	setcookie("user_login", $usuario["email"]);
	header("Location: index.php?tela-login=1");
}

die();
