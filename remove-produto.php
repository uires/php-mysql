<?php include("cabecalho.php"); ?>
<?php include("conecta.php");?>
<?php include("banco-produtos.php");?>
<?php

//Declarando um função
// @uthor: uíres



$id = $_GET['id'];
removeProduto($conexaoComOBancoDeDados, $id);

?>
<p class="text=success"> Produto com ID: <?=$id?> removido com sucesso! </p>

<?php
include("rodape.php");?>
