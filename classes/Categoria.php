<?php
class Categoria{

    /*atributos*/
    public $id;
    public $descricao;

    /*métodos*/
        public function listar(){
            $query = "SELECT id, descricao FROM tb_categorias";
            $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
            $resultado = $conexao->query($query);
            $lista = $resultado->fetchAll();
            return $lista;
    }
        public function lista1Categoria($id){
            $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
            $query = "SELECT id, descricao FROM tb_categorias WHERE id = ". $id;
            $resultado = $conexao->query($query);
            $lista = $resultado->fetchAll();
            
            foreach($lista as $linha){
                return $linha;
            }
        }

        public function inserir($descricao){
            $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
            $query = "INSERT INTO tb_categorias(descricao) VALUES ( '".$descricao."')";
            $conexao ->exec($query);
            
        }

        public function alterar($id, $descricao){
            $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
            $query = "UPDATE tb_categorias SET descricao = '".$descricao."' WHERE id = " . $id;

            $conexao->exec($query);
        }

        public function excluir ($id){
            $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
            $query = "DELETE FROM tb_categorias WHERE id = " . $id;
            $conexao->exec ($query);
        }
}
