<?php

require_once("config.php");


//Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(4);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuario usando o login e a senha

//$usuario = new Usuario();
//$usuario->login("root", "1004a!");
//echo $usuario;

//Criando um novo usuario
//$aluno = new Usuario("aluno", "@alun0");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "!jdasd@");

echo $usuario;

?>