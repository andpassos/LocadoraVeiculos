<?php

    require_once 'classes\Cliente.php';
    $id = $_POST['id'];
    $nome_editar = $_POST['nome'];
    $cpf_editar = $_POST['cpf'];
    $telefone_editar = $_POST['telefone'];
    $endereco_editar = $_POST['endereco'];
    $clientes = new Cliente();
    $clientes->alterar($id, $nome_editar, $cpf_editar, $telefone_editar, $endereco_editar);

    echo $id . " - " . $nome_editar . $cpf_editar . $telefone_editar . $endereco_editar;

    header('Location:clientes.php')

    ?>