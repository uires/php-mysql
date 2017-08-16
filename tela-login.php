<?php
include("conceta.php");
include("banco_usuarios.php");


$usuario = ($conexaoComOBancoDeDados, $_POST["email"], $_POST["senha"]);
echo $usuario;

