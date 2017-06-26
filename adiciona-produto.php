<?php include("cabecalho.php"); ?>
<?php include("conecta.php")?>
	<link href="loja.css" rel="stylesheet">


<?php

function insereProduto($conexaoComOBancoDeDados, $nome, $preco){
	$query = "insert into produtos (nome, preco) value ('{$nome}', {$preco})";
	return mysqli_query($conexaoComOBancoDeDados, $query);
}


$nome = $_GET["nome"];
$preco = $_GET["preco"];




if(insereProduto($conexaoComOBancoDeDados, $nome, $preco)) { ?>
	<p class="text-success">O produto <?= $nome ?>, com o preço de R$ <?= $preco ?> foi adicionando com sucesso.</p>
<?php } else { 
	$mensagemErroMySql = mysqli_error($conexaoComOBancoDeDados);
?>
	<p class="text-danger">O produto <?= $nome ?> não foi adicionando:<br> <?= $mensagemErroMySql ?> </p>
<?php
}

?>


<?php include("rodape.php"); ?>