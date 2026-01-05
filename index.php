<?php 

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);

//Carrega um usuário
// $usuario = new Usuarios();
// $usuario->loadById(3);
// echo $usuario;

//Carrega uma lista de usuários
// $lista = Usuarios::getList();
// echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
// $search = Usuarios::search("root");
// echo json_encode($search);

//Carrega um usuário usando o login e a senha
$usuario = new Usuarios();
$usuario->login("root", "5678");
echo $usuario;

 ?>