<?php
    $id = $_GET['CODIGO'];

    require_once 'cabecalho.php'; 
    require_once 'classes\Funcionario.php';
    $funcionarios = new  Funcionario();
    $linha = $funcionarios->lista1Funcionario($id);

?>

    <h2> Alterar Funcinário</h2>
    <form name="alterar-funcionario" action="funcionarios-editar-post.php" method="post">

        Descrição:
        <div class="row">
        <div class="col-md-6 col-md-offset-3">

        <div class="form-group">
        <input name="id" type="hidden" value="<?php echo $id;?>" class="form-control" > 
        
        <div class="form-group">
        <input name="funcionario" value="<?php echo $linha['funcionario'];?>" class="form-control">
        
        <div class="form-group">
        <input name="cargo" value="<?php echo $linha['cargo'];?>" class="form-control">
        
        <div class="form-group">
        <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>

        </div>
        </div>
    </form>

<?php require_once 'rodape.php' ?>