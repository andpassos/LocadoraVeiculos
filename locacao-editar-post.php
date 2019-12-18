<?php

    require_once 'classes\Locacao.php';
    $id = $_POST['id'];

    $campo_do_formulario_cliente_editar= $_POST['cliente'];
    $campo_do_formulario_veiculo_editar= $_POST['veiculo'];
    $campo_do_formulario_retira_editar= $_POST['retira'];
    $campo_do_formulario_devolucao_editar= $_POST['devolucao'];
    $campo_do_formulario_preco_editar= $_POST['preco'];
    $locacoes = new Locacao();
    $locacoes->alterar($id, $campo_do_formulario_cliente_editar, $campo_do_formulario_veiculo_editar, $campo_do_formulario_retira_editar= $_POST, $campo_do_formulario_devolucao_editar= $_POST, $campo_do_formulario_preco_editar= $_POST );

    echo $id . " - " . $campo_do_formulario_cliente_editar . $campo_do_formulario_veiculo_editar . $campo_do_formulario_retira_editar= $_POST . $campo_do_formulario_devolucao_editar= $_POST . $campo_do_formulario_preco_editar= $_POST;

    header('Location:locacao.php')


    ?>

