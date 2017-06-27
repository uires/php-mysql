<html>
	<meta charset="UTF-8">
</html>

<?php include("cabecalho.php");
 include("conecta.php"); 
 include("banco-produtos.php");
// @uthor: uíres

 

$produtos = buscarProdutos($conexaoComOBancoDeDados);
?>

<table class="table table-striped table-bordered">
<?php
	foreach($produtos as $produto) {
?>
		<tr>
			<td><?=$produto['nome']?> </td>
			<td>R$ <?=$produto['preco']?> </td>
			<td>ID: <?=$produto['id']?> </td>

			<td class="danger">  
				<a href="remove-produto.php?id=<?=$produto['id']?>" class="text-danger">Removedor</a>
			</td>
		</tr>
<?php 
	}

?>
</table>

<?php include("rodape.php"); ?>