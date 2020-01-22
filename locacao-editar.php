<?php
    $id = $_GET['CODIGO'];

    require_once 'cabecalho.php'; 
    require_once 'classes\Locacao.php';
    $locacoes = new  Locacao();
    $linha = $locacoes->lista1Locacao($id);

    require_once 'classes/Veiculo.php';
    $veiculos = new Veiculo();
    $lista_veiculos= $veiculos->listar();

    require_once 'classes/Cliente.php';
    $clientes = new Cliente();
    $lista_clientes= $clientes->listar();

?>

    <h2> Alterar Locação</h2>

    <form name="alterar-locacao" action="locacao-editar-post.php" method="post">
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        
        <div class="form-group">
                <label for="cliente">Cliente</label>
                             
                <select class=form-control name="cliente" >
                <?php foreach ($lista_clientes as $linha){?>
                <option> <?php echo $linha['nome'];?></option>

                <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="veiculo">Veículo</label>
                             
                <select class=form-control name="veiculo" >
                <?php foreach ($lista_veiculos as $linha){?>
                <option> <?php echo $linha['modelo'];?></option>

                <?php } ?>
                </select>
            </div>

           

            <div class="form-group">
                <label for="preco">Preço da Locação</label>
                <input type="number" step="10" min="0" name = "preco" class="form-control" placeholder="Preço do Produto" required>
            </div>

            <div class="form-group">
                <label for="total">Preço Total</label>
                <input type="number" name = "total" class="form-control" >
            </div>

            
            <div class="form-group">
                <label for="retira">Data Retira</label>
                <input type="date" name = "retira" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="devolucao">Data Devolução</label>
                <input type="date"name = "devolucao" class="form-control" required>
            </div>

               
            <input type="submit" class="btn btn-success btn-block" value="Salvar">

            <input type="button" class="btn btn btn-block" value="Calcular" onclick="Calcular();">
            
        </div>
    </div>
</form>

<script>
    function Calcular(){

    var retirada = new Date(document.querySelector("#retirada").value);
    var devolucao = new Date(document.querySelector("#devolucao").value);
    var diferencaHoras = Math.abs(retirada.getTime() - devolucao.getTime());
    var diferencaDias = Math.ceil(diferencaHoras / (1000 * 3600 * 24));
    
    var precoLocacao = document.querySelector('#preco').value;
    document.querySelector('#total').value= precoLocacao*diferencaDias;
 }
</script>

<?php require_once 'rodape.php' ?>


