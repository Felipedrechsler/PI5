<?php
session_start();
require_once "PostDAO.php";

print_r($_POST); // inputs normais
print_r($_FILES); //inputs de file

//pego os dados e mando inserir no BD, chama a fcao q insere

$origem = $_FILES["foto"]['tmp_name'];
$destino = 'img/'.date('YmdHis').$_FILES["foto"]['name']; 

copy($origem, $destino);

echo $destino;

$foto = $destino;
$descricao = $_POST["descricao"];
$id_user = $_SESSION['id'];
$nomeanimal = $_POST["nome"];
//redireciono a pagina para index.php

$DAO = new PostDAO;
if($DAO->inserirPosts($foto, $descricao, $id_user, $nomeanimal)){
	header("location:index.php");
}




