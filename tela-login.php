<?php
include("conecta.php");
include("banco_usuarios.php");


$usuario = buscarUsuario($conexaoComOBancoDeDados, $_POST["email"], $_POST["senha"]);
var_dump($usuario);
if($usuario == null){
	header("Location: index.php?tela-login=0");
}else{
	header("Location: index.php?tela-login=1");
}

die();
