<?php require_once 'cabecalho.php'; ?>
<h2>Criar Novo Funcionário</h2>

<form name="novo-funcionario" method="post" action="funcionarios-criar-post.php">
    Descrição do Funcionário:

    <div class="row">
    <div class="col-md-6 col-md-offset-3">
   
    <div class="form-group">
    <input name="funcionario" maxlenght="10" placeholder="Nome Funcionário" class="form-control">
    </div>

    <div class="form-group">
    <input name="cargo" maxlenght="10" placeholder="Cargo"  class="form-control">
    </div>

    <div class="form-group">
    <input type="submit" class="btn btn-success btn-block" value="Salvar">
    </div>

    </div>
    </div>
</form>


<?php require_once 'rodape.php'; ?>