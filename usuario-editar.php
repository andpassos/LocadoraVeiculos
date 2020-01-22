<?php
    $id = $_GET['CODIGO'];

    require_once 'cabecalho.php'; 
    require_once 'classes\Usuario.php';
    $usuarios = new  Usuario();
    $linha = $usuarios->lista1Usuario($id);

?>

    <h2> Alterar Usuário</h2>
    <form name="alterar-usuario" action="usuario-editar-post.php" method="post">

        Descrição:
        <div class="row">
        <div class="col-md-6 col-md-offset-3">

        <div class="form-group">
        <input name="id" type="hidden" value="<?php echo $id;?>" class="form-control" > 
        </div>
        
        <div class="form-group">
        <input name="usuario" value="<?php echo $linha['usuario'];?>" class="form-control">
        </div>

        <div class="form-group">
        <input name="senha" value="<?php echo $linha['senha'];?>" class="form-control">
        </div>
        
        <div class="form-group">
        <input type="submit" class="btn btn-success btn-block" value="Salvar" class="form-control">
        </div>
        
        </div>
        </div>
    </form>

<?php require_once 'rodape.php' ?>