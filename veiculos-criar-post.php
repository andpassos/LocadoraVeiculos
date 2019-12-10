<?php
require_once 'classes/Veiculo.php';

$veiculos = new Veiculo();

$campo_do_formulario_placa= $_POST['placa'];
$campo_do_formulario_fabricante= $_POST['fabricante'];
$campo_do_formulario_modelo= $_POST['modelo'];
$campo_do_formulario_categoria= $_POST['categoria'];
$campo_do_formulario_cor= $_POST['cor'];
$campo_do_formulario_passageiros= $_POST['passageiros'];
$campo_do_formulario_arcondicionado= $_POST['arcondicionado'];
$campo_do_formulario_cambio= $_POST['cambio'];

$veiculos->inserir($campo_do_formulario_placa, $campo_do_formulario_fabricante, $campo_do_formulario_modelo, $campo_do_formulario_categoria, $campo_do_formulario_cor, $campo_do_formulario_passageiros, $campo_do_formulario_arcondicionado, $campo_do_formulario_cambio);

header('Location:veiculos.php')

?> 
