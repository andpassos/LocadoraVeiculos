<?php require_once 'cabecalho.php'; ?>
<h2>Criar Novo Usuário</h2>

<form name="novo-usuario" method="post" action="usuario-criar-post.php">
    Descrição do usuário:

    <div class="row">
    <div class="col-md-6 col-md-offset-3">

    <div class="form-group">
    <input name="usuario" maxlenght="10" class="form-control">
    </div>

    <div class="form-group">
    <input name="senha" maxlenght="10" class="form-control">
    </div>
    
    <br>
    <div class="form-group">
    <input type="submit" class="btn btn-success btn-block" value="Salvar">
    </div>

    </div>
    </div>

</form>

<?php require_once 'rodape.php'; ?>

