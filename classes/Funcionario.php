
<?php
class Funcionario{

/*atributos*/
public $id;
public $funcionario;
public $cargo;


/*métodos*/
    public function listar(){
        $query = "SELECT id, funcionario, cargo FROM tb_funcionarios";
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir($funcionario, $cargo){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "INSERT INTO tb_funcionarios(funcionario, cargo) VALUES ( '".$funcionario."', '".$cargo."')";
        $conexao ->exec($query);
    }

        public function excluir ($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "DELETE FROM tb_funcionarios WHERE id = " . $id;
        $conexao->exec ($query);
    }

    public function alterar($id, $funcionario, $cargo){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
        $query = "UPDATE tb_funcionarios SET funcionario = '".$funcionario."' , cargo = '".$cargo."' WHERE id = " . $id;

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
