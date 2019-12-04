<?php
session_start();
require_once 'UserDAO.php';
if (isset($_POST['email']) && isset($_POST['senha'])){
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		
		$usu = new User();
		$usu->email = $email;
		$usu->password = $senha;

     	$dao = new UserDAO();

		if($logado = $dao->login($usu)){
			$_SESSION['id'] = $logado['idusers'];
			$_SESSION['nome'] = $logado['nome'];
			$_SESSION['foto'] = $logado['foto'];
			$_SESSION['email'] = $logado['email'];

		}

		header('location: index.php');
}