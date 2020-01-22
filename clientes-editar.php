<?php
    $id = $_GET['CODIGO'];

    require_once 'cabecalho.php'; 
    require_once 'classes\Cliente.php';
    $cliente = new  Cliente();
    $linha = $cliente->lista1Cliente($id);

?>

    <h2> Alterar Cliente</h2>
    <form name="alterar-cliente" action="clientes-editar-post.php" method="post">

        Descrição:
        <div class="row">
        <div class="col-md-6 col-md-offset-3">
       
        <div class="form-group">
        <input name="id" type="hidden" value="<?php echo $id;?>" class="form-control">
        </div>
        <div class="form-group">
        <input name="nome" value="<?php echo $linha['nome'];?>" class="form-control">
        </div>
        <div class="form-group">
        <input name="cpf" value="<?php echo $linha['cpf'];?> " class="form-control">
        </div>
        <div class="form-group">
        <input name="telefone" value="<?php echo $linha['telefone'];?>" class="form-control">
        </div>
        <div class="form-group">
        <input name="endereco" value="<?php echo $linha['endereco'];?>"class="form-control">
        </div>
       
        <div class="form-group">

        <input type="submit" class="btn btn-success btn-block" value="Salvar">
    
        </div>
        <div>
    </form>

<?php require_once 'rodape.php' ?>