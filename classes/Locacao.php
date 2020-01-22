
<?php
class Locacao{

/*atributos*/
public $id;
public $cliente;
public $veiculo;
public $retira;
public $devolucao;
public $preco;
public $total;


/*métodos*/
    public function listar(){
        $query = "SELECT id, cliente, veiculo, retira, devolucao, preco, total FROM tb_locacao";
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir($cliente, $veiculo, $retira, $devolucao, $preco, $total){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "INSERT INTO tb_locacao(cliente, veiculo, retira, devolucao, preco, total ) VALUES ( '".$cliente."', '".$veiculo."', '".$retira."', '".$devolucao."', '".$preco."', '".$total."')";
        $conexao ->exec($query);
    }

        public function excluir ($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "DELETE FROM tb_locacao WHERE id = " . $id;
        $conexao->exec ($query);
    }

    public function alterar($id, $cliente, $veiculo, $retira, $devolucao, $preco, $total){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "UPDATE tb_locacao SET cliente = '".$cliente."' , veiculo = '".$veiculo."', retira = '".$retira."', devolucao = '".$devolucao."', preco = '".$preco."', total = '".$total."' WHERE id = " . $id;
        $conexao ->exec($query);
    }


    public function lista1Locacao($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "SELECT  id, cliente, veiculo, retira, devolucao, preco, total FROM tb_locacao WHERE id = ". $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        
        foreach($lista as $linha){
            return $linha;
        }
    }

}