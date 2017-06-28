<?php include("cabecalho.php"); ?>
<?php include("conecta.php");?>
<?php include("banco-produtos.php");?>
<?php

//Declarando um função
// @uthor: uíres



$id = $_GET['id'];
removeProduto($conexaoComOBancoDeDados, $id);
header("Location: produto-lista.php");
die();

<?php
include("rodape.php");?>
