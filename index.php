<?php require_once 'login-cabecalho.php' ?>

<h2 style = "text-align: center;">LOGIN ALL RENT A CAR</h2>

<div class="container" style = "border: 3px solid; text-align: center; height: 170px; width: 600px;">
<br>
    <form method = "post" action = "login-validar.php">
        <label for="usuario"><b>Usuário:</b></label>
        <input type="text" placeholder="Digite o seu usuário" name="usuario" required> <br>

        <label for="senha"><b>Senha:</b></label>
        <input type="password" placeholder="Digite sua senha" name="senha" required><br>
        <?php 
            if (isset ($_GET['mensagem'])){
                echo 'Atenção: Login ou Senha Inválida';
                
            }
        ?>
        <br>
        <br>
        <button type="submit">Login</button>
    </form>
 </div>

<?php require_once 'rodape.php' ?>