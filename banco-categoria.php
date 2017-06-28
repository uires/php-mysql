<?php 
include("conecta.php");

// @author: uíres
function listaCategorias($conexaoComOBancoDeDados) {
    $categorias = array();
    $query = "select * from categorias";
    $resultado = mysqli_query($conexaoComOBancoDeDados, $query);
    while($categoria = mysqli_fetch_assoc($resultado)) {
        array_push($categorias, $categoria);
    }
    return $categorias;
}











?>
