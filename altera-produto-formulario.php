<?php 
include("cabecalho.php"); 
include("conecta.php"); 
include("banco-categoria.php");

$id =$_GET['id'];
//$produto = buscaProduto($conexaoComOBancoDeDados, $id);
$categorias = listaCategorias($conexaoComOBancoDeDados); ?>


	<link href="loja.css" rel="stylesheet">

    <h1>Altera Produto</h1>
	<form action="altera-produto.php" method="post">
		<table class="table">
    		<tr>
		        <td><h5>Nome</h5></td>
		        <td><input class="form-control" type="text" name="nome"></td>
		    </tr>
		    <tr>   
		        <td> <h5>Preço</h5></td>
		        <td> <input class="form-control" type="number" name="preco" step=0.01 ></td>

		    </tr>
		    <tr>
		    	<td>Descrição</td>
		    	<td><textarea name="descricao" class="form form-control"></textarea></td>
		    </tr>
		    <tr>

		    	<td>Categoria</td>
		    	<td>
		    		<select class="form form-control" name="categoria_id">
			    		<?php foreach($categorias as $categoria) : ?>
			    			<option value="<?=$categoria['id']?>">
			    				<?=$categoria['nome']?></br>
			    			</option>
			   		 	<?php endforeach ?>
		   		 	</select>
		    	</td>

		    </tr>
		    <tr>
		    	<td>
		    		<td><button class="btn btn-primary" type="submit">Alterar</button></td>
		    			    	
		    	</td>
		    </tr>
        </table>
    </form>

<?php include("rodape.php"); ?>