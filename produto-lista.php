<html>
	<meta charset="UTF-8">
</html>

<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>

<?php

function buscarProdutos($conexaoComOBancoDeDados){
	$produtos = array();
	$resultado =  mysqli_query($conexaoComOBancoDeDados, "select * from produtos");

	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $produto);
	}

	return $produtos;

}


$produtos = buscarProdutos($conexaoComOBancoDeDados);
foreach($produtos as $produto) {
    echo $produto['nome'] . "<br/>";
}

?>

<?php include("rodape.php"); ?>