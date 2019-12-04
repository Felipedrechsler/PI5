<?php
function estaLogado(){
	if(isset($_SESSION['id'])){
		require_once "UserDAO.php";
		return true;
		$dao = new UserDAO();
		$mensagens = $dao->contaMensagens($_SESSION['id']);
	}else{
		return false;
	}
}

