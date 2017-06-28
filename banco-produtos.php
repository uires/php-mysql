<?php
// @uthor: uíres
// banco de funções
function buscarProdutos($conexaoComOBancoDeDados){
	$produtos = array();
	$resultado =  mysqli_query($conexaoComOBancoDeDados, "select * from produtos");

	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $produto);
	}

	return $produtos;

}

// função para inserção no banco de dados com retorno de uma query executando o procedimento.
function insereProduto($conexaoComOBancoDeDados, $nome, $preco, $descricao, $categorias_id){
	$query = "insert into produtos (nome, preco, descricao, categorias_id) value ('{$nome}', {$preco}, '{$descricao}', {$categorias_id})";
	return mysqli_query($conexaoComOBancoDeDados, $query);
}	 


function removeProduto($conexaoComOBancoDeDados, $id){
	$query= "delete from produtos where id = {$id}";
	return mysqli_query($conexaoComOBancoDeDados, $query);
} ?>
