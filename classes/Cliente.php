
<?php
class Cliente{

/*atributos*/
public $id;
public $nome;
public $endereco;
public $telefone;


/*métodos*/
    public function listar(){
        $query = "SELECT id, nome, cpf FROM tb_clientes";
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir($nome, $cpf, $endereco, $telefone){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "INSERT INTO tb_clientes(nome, cpf, endereco, telefone ) VALUES ( '".$nome."', '".$cpf."', '".$endereco."', '".$telefone."')";
        $conexao ->exec($query);
    }

        public function excluir ($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "DELETE FROM tb_clientes WHERE id = " . $id;
        $conexao->exec ($query);
    }

    public function alterar($id, $funcionario, $cargo){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "UPDATE tb_clientes SET funcionario = '".$funcionario."' , cargo = '".$cargo."' WHERE id = " . $id;

        $conexao->exec($query);
    }


    public function lista1Funcionario($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "SELECT id, funcionario, cargo FROM tb_funcionarios WHERE id = ". $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        
        foreach($lista as $linha){
            return $linha;
        }
    }

}