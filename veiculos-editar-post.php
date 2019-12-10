<?php

    require_once 'classes\Veiculo.php';
    $id = $_POST['id'];
    $placa_editar = $_POST['placa'];
    $fabricante_editar = $_POST['fabricante'];
    $modelo_editar = $_POST['modelo'];
    $categoria_editar = $_POST['categoria'];
    $cor_editar = $_POST['cor'];
    $passageiros_editar = $_POST['passageiros'];
    $arcondicionado_editar = $_POST['arcondicionado'];
    $cambio_editar = $_POST['cambio'];
    $veiculo = new Veiculo();
    $veiculo->alterar($id,$placa_editar,$fabricante_editar,$modelo_editar,$categoria_editar,$cor_editar,$passageiros_editar,$arcondicionado_editar,$cambio_editar);

    echo $id . " - " . $placa_editar . $fabricante_editar . $modelo_editar . $categoria_editar . $cor_editar . $passageiros_editar . $arcondicionado_editar . $cambio_editar;

    header('Location:veiculos.php')

    ?>