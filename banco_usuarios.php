<?php


function buscarUsuario ($conexaoComOBancoDeDados, $email, $senha){ 
	$senhaMd5= md5($senha)
	$query = "select * from usuarios where email='{$email}' and senha='{$senhaMd5}' ";
	$resultadoBusca= mysqli_query($conexaoComOBancoDeDados, $query);
	$usuarioRetorno= mysqli_fetch_assoc($resultadoBusca);
	$retorno= $usuarioRetorno;


}