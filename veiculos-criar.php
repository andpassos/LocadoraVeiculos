<?php 
require_once 'classes/Veiculo.php';
require_once 'cabecalho.php'; 

require_once 'classes/Categoria.php';
$categoria = new Categoria();
$lista_categotira = $categoria->listar();

?>
<h2>Cadastrar Novo Veículo</h2>
Descrição do Veículo:

<form name="novo-veiculo" method="post" action="veiculos-criar-post.php">

    <div class="row">
    <div class="col-md-6 col-md-offset-3">
   
    
    <div class="form-group">
    <input name="placa" maxlenght="8" placeholder="Placa" class="form-control">
    </div>

    <div class="form-group">
    <input name="fabricante" maxlenght="50" placeholder="Fabricante" class="form-control">
    </div>
    
    <div class="form-group">
    <input name="modelo" maxlenght="15" placeholder="Modelo" class="form-control">
    </div>

    <div class="form-group">
    <select name="categoria" class="form-control" >
        <?php foreach ($lista_categotira as $linha){?>
        <option> <?php echo $linha['descricao'];?> </option>

        <?php } ?>
    </select>
     </div>
    
    <div class="form-group">
    <input name="cor" maxlenght="15" placeholder="Cor" class="form-control">
    </div>
    
    <div class="form-group">
    <input name="passageiros" maxlenght="2" placeholder="Passageiros" class="form-control">
    </div>
    
    <div class="form-group">
    <select name=arcondicionado maxlenght="3" placeholder="Ar-Condicionado" class="form-control">
    <option value="">Ar-Condicionado</option>
    <option value="Sim">Sim</option>
    <option value="Não">Não</option>
    </select>
    </div>


    <div class="form-group">
    <select name="cambio" maxlenght="11"placeholder="Câmbio" class="form-control">
    <option value="">Câmbio</option>
    <option value="Automático">Automático</option>
    <option value="Manual">Manual</option>
    </select>

    </div>
    
    <div class="form-group">
    <input type="submit" class="btn btn-success btn-block" value="Salvar">
    </div>

    </div>
    </div>
</form>

<?php require_once 'rodape.php'; ?>