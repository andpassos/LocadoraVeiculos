<?php require_once 'cabecalho.php'; ?>
<h2>Criar novo funcinário</h2>

<form name="novo-funcionario" method="post" action="funcionarios-criar-post.php">
    Descrição do usuário:
    <input name="funcionario" maxlenght="10">
    <input name="cargo" maxlenght="10">
    <br>
    <button type="submit">Salvar</button>
</form>

<?php require_once 'rodape.php'; ?>