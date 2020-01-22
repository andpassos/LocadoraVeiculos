<?php require_once 'cabecalho.php'; ?>
<h2>Criar Novo Cliente</h2>

<form name="novo-cliente" method="post" action="clientes-criar-post.php">
    
    Descrição da cliente:

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

        <div class="form-group">
        <input name="nome" maxlenght="30" placeholder="Nome" class="form-control">
        </div>

        <div class="form-group">
        <input name="cpf" maxlenght="11" placeholder="CPF" class="form-control">
        </div>

        <div class="form-group">
        <input name="telefone" maxlenght="12" placeholder="Telefone" class="form-control">
        </div>

        <div class="form-group">
        <input name="endereco" maxlenght="50" placeholder="Endereço" class="form-control">
        </div>
        
        <div class="form-group">

        <input type="submit" class="btn btn-success btn-block" value="Salvar">
    
    </div>
    <div>
</form>

<br>
<?php require_once 'rodape.php'; ?>