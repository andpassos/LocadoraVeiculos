<?php require_once 'cabecalho.php'; ?>
<h2>Criar novo usuário</h2>

<form name="novo-usuario" method="post" action="usuario-criar-post.php">
    Descrição do usuário:
    <input name="usuario" maxlenght="10">
    <input name="senha" maxlenght="10">
    <br>
    <button type="submit">Salvar</button>
</form>

<?php require_once 'rodape.php'; ?>