<?php
include("cabecalho.php"); 
include("conecta.php"); 
include("banco-categoria.php");


$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];

if(alteraProduto($conexaoComOBancoDeDados, $id, $nome, $preco, $descricao, $categoria_id)) { ?>
    <p class="text-success">O produto <?= $nome ?>, <?= $preco ?> foi alterado.</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O produto <?= $nome ?> não foi alterado: <?= $msg?></p>
<?php
}


include("rodape.php");?>