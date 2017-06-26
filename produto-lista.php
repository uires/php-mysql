<html>
	<meta charset="UTF-8">
</html>

<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>



<?php

$resultadoDaBucasPHP = mysqli_query($conexaoComOBancoDeDados, "select * from produtos");

while($produtosBuscados = mysqli_fetch_assoc($resultadoDaBucasPHP)){
	echo $produtosBuscados['nome'] . "o preço é: R$ " . $produtosBuscados['preco'] . "</br>" ;
}

?>



<?php include("rodape.php"); ?>