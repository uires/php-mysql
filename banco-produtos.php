<?php
// @uthor: uíres
// banco de funções
function buscarProdutos($conexaoComOBancoDeDados){
	$produtos = array();
	$resultado =  mysqli_query($conexaoComOBancoDeDados, "SELECT p.*, c.nome as categoria_nome FROM produtos AS p JOIN categorias AS c on p.categoria_id = c.id");

	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $produto);
	}

	return $produtos;

}

// função para inserção no banco de dados com retorno de uma query executando o procedimento.
function insereProduto($conexaoComOBancoDeDados, $nome, $preco, $descricao, $categoria_id){
	$query = "INSERT  INTO produtos (nome, preco, descricao, categoria_id) VALUES ('{$nome}', {$preco}, '{$descricao}', {$categoria_id})";
	return mysqli_query($conexaoComOBancoDeDados, $query);
}	 


function removeProduto($conexaoComOBancoDeDados, $id){
	$query= "DELETE FROM produtos WHERE id = {$id}";
	return mysqli_query($conexaoComOBancoDeDados, $query);
} 
// função para buscar produto a ser alterado
function buscaProduto($conexaoComOBancoDeDados, $id) {
    $query = "SELECT * FROM produtos WHERE id = {$id}";
    $resultado = mysqli_query($conexaoComOBancoDeDados, $query);
    return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexaoComOBancoDeDados, $id, $nome, $preco, $descricao, $categoria_id) {
    $query = "UPDATE produtos SET nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', 
        categoria_id= {$categoria_id} WHERE id = '{$id}'";
    return mysqli_query($conexaoComOBancoDeDados, $query);
}
