<?php


function buscarUsuario ($conexao, $email, $senha){ 
	// senha cript, atráves do md5
	$senhaMd5= md5($senha);
	// query de busca no banco loja, tabela usuários
	$query = "select * from usuarios where email='{$email}' and senha='{$senhaMd5}'";
	$resultadoBusca= mysqli_query($conexao, $query);
	$usuario= mysqli_fetch_assoc($resultadoBusca);
	return $usuario;


}