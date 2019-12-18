<?php
    $email = $_POST['usuario'];
    $senha = $_POST['senha'];
    require_once 'classes/Usuario.php';
    $usuario = new Usuario();
    $existe = $usuario->validarLogin($email, $senha);
    if(isset($existe)){
        header('Location:home.php');
    }else{
        header('Location:index.php?mensagem=1');
        
                   
    }
?>