
<?php
class Usuario{

/*atributos*/
public $id;
public $usuario;
public $senha;


/*métodos*/
    public function listar(){
    $query = "SELECT id, usuario, senha FROM tb_usuarios";
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();
    return $lista;
}

    public function inserir($usuario, $senha){
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
    $query = "INSERT INTO tb_usuarios(usuario, senha) VALUES ( '".$usuario."', '".$senha."')";
    $conexao ->exec($query);
}

    public function excluir ($id){
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=banco","root","");
    $query = "DELETE FROM tb_usuarios WHERE id = " . $id;
    $conexao->exec ($query);
}
}