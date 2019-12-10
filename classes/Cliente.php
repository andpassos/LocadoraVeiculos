
<?php
class Cliente{

/*atributos*/
public $id;
public $nome;
public $cpf;
public $telefone;
public $endereco;



/*métodos*/
    public function listar(){
        $query = "SELECT id, nome, cpf FROM tb_clientes";
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir($nome, $cpf,  $telefone, $endereco){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "INSERT INTO tb_clientes(nome, cpf, telefone, endereco ) VALUES ( '".$nome."', '".$cpf."', '".$telefone."', '".$endereco."')";
        $conexao ->exec($query);
    }

        public function excluir ($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "DELETE FROM tb_clientes WHERE id = " . $id;
        $conexao->exec ($query);
    }

    public function alterar($id, $nome, $cpf, $telefone, $endereco ){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "UPDATE tb_clientes SET nome = '".$nome."' , cpf = '".$cpf."', telefone = '".$telefone."', endereco = '".$endereco."' WHERE id = " . $id;

        $conexao->exec($query);
    }


    public function lista1Cliente($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "SELECT id, nome, cpf, telefone, endereco FROM tb_clientes WHERE id = ". $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        
        foreach($lista as $linha){
            return $linha;
        }
    }

}