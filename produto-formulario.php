<?php include("cabecalho.php"); ?>
	<link href="loja.css" rel="stylesheet">

    <h1>[Formulário(ITENS)]</h1>
	<form action="adiciona-produto.php">
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
		    	<td>
		    		<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
		    			    	
		    	</td>
		    </tr>
        </table>
    </form>

<?php include("rodape.php"); ?>