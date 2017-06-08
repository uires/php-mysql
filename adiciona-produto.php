<?php include("cabecalho.php"); ?>
	
	<?php
	$nome = $_GET["nome"];
	$preco = $_GET["preco"];
	?>
	<p class="alert-success">
	Produto <?= $nome; ?> foi adicionado com sucesso!<br>
	O preço do produto é : R$ <?= $preco; ?>
	</p>

<?php include("rodape.php"); ?>