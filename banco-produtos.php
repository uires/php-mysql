<?php
// @uthor: uíres
// banco de funções
function buscarProdutos($conexaoComOBancoDeDados){
	$produtos = array();
	$resultado =  mysqli_query($conexaoComOBancoDeDados, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id");

	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $produto);
	}

	return $produtos;

}

// função para inserção no banco de dados com retorno de uma query executando o procedimento.
function insereProduto($conexaoComOBancoDeDados, $nome, $preco, $descricao, $categoria_id){
	$query = "insert into produtos (nome, preco, descricao, categoria_id) value ('{$nome}', {$preco}, '{$descricao}', {$categoria_id})";
	return mysqli_query($conexaoComOBancoDeDados, $query);
}	 


function removeProduto($conexaoComOBancoDeDados, $id){
	$query= "delete from produtos where id = {$id}";
	return mysqli_query($conexaoComOBancoDeDados, $query);
} 
// função para buscar produto a ser alterado
function buscaProduto($conexaoComOBancoDeDados, $id) {
    $query = "select * from produtos where id = {$id}";
    $resultado = mysqli_query($conexaoComOBancoDeDados, $query);
    return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexaoComOBancoDeDados, $id, $nome, $preco, $descricao, $categoria_id) {
    $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', 
        categoria_id= {$categoria_id} where id = '{$id}'";
    return mysqli_query($conexaoComOBancoDeDados, $query);
}
