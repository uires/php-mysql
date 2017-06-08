<html>
<?php
$nome = $_GET["nome"];
$preco = $_GET["preco"];
?>
Produto <?= $nome; ?> foi adicionado com sucesso!<br>
O preço do produto é : R$ <?= $preco; ?>
</html>