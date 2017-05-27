<?php 

require_once("config.php");

//$sql = new Sql();

//Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(1);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("jose","423423");

echo $usuario;

?>