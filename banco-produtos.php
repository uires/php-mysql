<?php
// @uthor: uíres
function buscarProdutos($conexaoComOBancoDeDados){
	$produtos = array();
	$resultado =  mysqli_query($conexaoComOBancoDeDados, "select * from produtos");

	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $produto);
	}

	return $produtos;

}


function insereProduto($conexaoComOBancoDeDados, $nome, $preco){
	$query = "insert into produtos (nome, preco) value ('{$nome}', {$preco})";
	return mysqli_query($conexaoComOBancoDeDados, $query);
} 


function removeProduto($conexaoComOBancoDeDados, $id){
	$query= "delete from produtos where id = {$id}";
	return mysqli_query($conexaoComOBancoDeDados, $query);
} ?>
