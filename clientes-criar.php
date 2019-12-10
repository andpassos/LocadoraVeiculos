<?php require_once 'cabecalho.php'; ?>
<h2>Criar novo cliente</h2>

<form name="novo-cliente" method="post" action="clientes-criar-post.php">
    Descrição da cliente:
    <input name="nome" maxlenght="30" placeholder="Nome">
    <input name="cpf" maxlenght="11" placeholder="CPF">
    <input name="telefone" maxlenght="12" placeholder="Telefone">
    <input name="endereco" maxlenght="50" placeholder="Endereço">
    <br>
    <button type="submit">Salvar</button>
</form>

<?php require_once 'rodape.php'; ?>