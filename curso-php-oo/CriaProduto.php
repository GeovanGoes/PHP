<?php

	require_once("class/Produto.php");



	$produto = new Produto();

	$produto->nome = "Livro daquilo lá...";

	var_dump($produto);

?>