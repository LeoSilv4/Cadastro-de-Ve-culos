<?php
    switch($_REQUEST["acao"]) {
    	case 'cadastrar':
    	$nome = $_POST["nome"];
    	$Marca = $_POST["marca"];
    	$Ano   = $_POST["ano"];
    	$Valor_de_Venda = $_POST["valor_de_venda"];

    	$sql = "INSERT INTO veiculos (nome, marca,ano,valor_de_venda) VALUES('{$nome}','{$marca}', ' {$ano}', '{$valor_de_venda}')";

    	$res = $conn ->query($sql);
    	break;

    	case 'editar':
    	// code...
    	break;

    }