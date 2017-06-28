<?php include("cabecalho.php"); ?>
<?php include("conecta.php");?>
<?php include("banco-produtos.php");?>
<?php


// @uthor: uíres



$id = $_POST['id'];
removeProduto($conexaoComOBancoDeDados, $id);
header("Location: produto-lista.php?removido=true");
die();


include("rodape.php");?>
