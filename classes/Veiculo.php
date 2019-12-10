
<?php
class Veiculo{

/*atributos*/
public $id;
public $placa;
public $fabricante;
public $modelo;
public $categoria;
public $cor;
public $passageiros;
public $arcondicionado;
public $cambio;



/*métodos*/
    public function listar(){
        $query = "SELECT id, fabricante, modelo, categoria, passageiros, arcondicionado, cambio FROM tb_veiculos";
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir($placa, $fabricante, $modelo, $categoria, $cor, $passageiros, $arcondicionado, $cambio){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "INSERT INTO tb_veiculos(placa, fabricante, modelo, categoria, cor, passageiros, arcondicionado, cambio ) VALUES ( '".$placa."', '".$fabricante."', '".$modelo."', '".$categoria."', '".$cor."', '".$passageiros."', '".$arcondicionado."', '".$cambio."')";
        $conexao ->exec($query);
    }

        public function excluir ($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "DELETE FROM tb_veiculos WHERE id = " . $id;
        $conexao->exec ($query);
    }

    public function alterar($id, $placa, $fabricante, $modelo, $categoria, $cor, $passageiros, $arcondicionado, $cambio){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "UPDATE tb_veiculos SET placa = '".$placa."' , fabricante = '".$fabricante."', modelo = '".$modelo."', categoria = '".$categoria."', cor = '".$cor."', passageiros = '".$passageiros."', arcondicionado = '".$arcondicionado."', cambio = '".$cambio."' WHERE id = " . $id;

        $conexao->exec($query);
    }


    public function lista1Veiculo($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "SELECT placa, fabricante, modelo, categoria, cor, passageiros, arcondicionado, cambio FROM tb_veiculos WHERE id = ". $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        
        foreach($lista as $linha){
            return $linha;
        }
    }

}