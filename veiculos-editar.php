<?php
    $id = $_GET['CODIGO'];

    require_once 'cabecalho.php'; 
    require_once 'classes\Veiculo.php';


    require_once 'classes/Categoria.php';

    $veiculos = new  Veiculo();
    $linha = $veiculos->lista1Veiculo($id);

    $categoria = new Categoria();
    $lista_categoria = $categoria->listar();

?>

    <h2> Alterar Veículos</h2>
    <form name="alterar-veiculo" action="veiculos-editar-post.php" method="post">

        Descrição:

        <div class="row">
        <div class="col-md-6 col-md-offset-3">
        

        <div class="form-group">
        <input name="id" type="hidden" value="<?php echo $id;?>" class="form-control">
        </div>

        <div class="form-group">
        <input name="placa" value="<?php echo $linha['placa'];?>" class="form-control">
        </div>

        <div class="form-group">
        <input name="fabricante" value="<?php echo $linha['fabricante'];?>" class="form-control">
        </div>

        <div class="form-group">
        <input name="modelo" value="<?php echo $linha['modelo'];?>" class="form-control">
        </div>

        <div class="form-group">
        <select name="categoria" class="form-control" >
        
        <?php foreach ($lista_categoria as $linha_categoria){?>
            
            <?php if ($linha['categoria'] == $linha_categoria['descricao']){?>
                <option selected><?php echo $linha_categoria['descricao'];?> </option>
            <?php }

                else { ?>
                <option ><?php echo $linha_categoria['descricao'];?> </option>
            <?php }?>
               
            <?php }?>
                         
        </select>
        </div>

        <div class="form-group">
        <input name="cor" value="<?php echo $linha['cor'];?>" class="form-control">
        </div>

        <div class="form-group">
        <input name="passageiros" value="<?php echo $linha['passageiros'];?>" class="form-control">
        </div>

        <div class="form-group">
        <select name=arcondicionado maxlenght="3" value="<?php echo $linha['arcondicionado'];?>" class="form-control">

        <?php if ($linha ['arcondicionado'] == "Sim"){?>

        <option selected value="Sim">Sim</option>
        <option value="Não">Não</option>

        <?php } elseif ($linha ['arcondicionado'] == "Não"){?>
        <option selected value="Não">Não</option>
        <option value="Sim">Sim</option>
        <?php } ?>
        </select>
        </div>

        <div class="form-group">
        <select name="cambio" maxlenght="11" value="<?php echo $linha['cambio'];?>" class="form-control">
        
        <?php if ($linha ['cambio'] == "Automático"){?>

        <option selected value="Automático">Automático</option>
        <option value="Manual">Manual</option>

        <?php } elseif ($linha ['cambio'] == "Manual"){?>
        <option selected value="Manual">Manual</option>
        <option value="Automático">Automático</option>
        <?php } ?>
        </select>
        </div>

        <div class="form-group">
        <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>

        </div>
        </div>
    </form>

<?php require_once 'rodape.php' ?> 