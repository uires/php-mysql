<html>
	<meta charset="UTF-8">
</html>

<?php
// inclusão de páginas PHP
 include("cabecalho.php");
 include("conecta.php"); 
 include("banco-produtos.php");
// @uthor: uíres
// atribuição de array, para verificar a existência de tal dado 
 if(array_key_exists("removido", $_GET) && $_GET['removido']=='true'){ ?>
 	<p class="alert-success">Produto apagado com sucesso.</p>
<?php
}
// função buscar produto com parâmetro, conexão com o banco
$produtos = buscarProdutos($conexaoComOBancoDeDados);
?>

<table class="table table-striped table-bordered">
<?php // foreach para listar informações do banco de dados, utilizando tabela e função substr para limitar caracteres
	foreach($produtos as $produto) {
?>
		<tr>
			<td><?=$produto['nome']?> </td>
			<td>R$ <?=$produto['preco']?> </td>
			<td>ID: <?=$produto['id']?> </td>
			<td><?= substr($produto['descricao'],0, 40) ?></td>
			<td><?= $produto['categoria_nome'] ?></td>			
		   	<td><a class="btn btn-warning" href="altera-produto-formulario.php?id=<?=$produto['id']?>">Altera Produto</a>
			<td>
				<form action="remove-produto.php" method="post">
					<input type="hidden" name="id" value="<?=$produto['id']?>" />
					<button class="btn btn-danger">Removedor</button>
				</form>

			</td>
		</tr>
<?php // include de rodapé e fechamento da estrutura foreach
	}

?>
</table>

<?php include("rodape.php"); ?>