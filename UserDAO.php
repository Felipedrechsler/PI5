</<?php 

require_once 'User.php';
require_once 'Database.php';

 class UserDAO{
 	private $conexao;

 	public function __construct(){
 		$db = new Database();
 		$this->conexao = $db->getConexao();
 	}

 	public function getUser(){
 		$sql = "select * from users  ORDER BY RAND() limit 1";
 		$stmt = $this->conexao->query($sql);
 		$user = $stmt->fetchAll(PDO::FETCH_ASSOC);
 		return $user;

 	}

 	public function contaMensagens($iduser){
 		$sql = "select count(*) from mensagem where id_user=:id_user";
 		$stmt = $this->conexao->prepare($sql);
 		$stmt->bindValue(':id_user', $iduser);
 		$stmt->execute();
 		$contagem = $stmt->fetch(PDO::FETCH_ASSOC);
 		return $contagem;

 	}

 	public function login(User $usuario){
 		$sql = "select * from users where email=:email and password=:password";
 		$stmt = $this->conexao->prepare($sql);
 		$stmt->bindValue(':email', $usuario->email);
 		$stmt->bindValue(':password', $usuario->password);
 		$stmt->execute();
 		$user = $stmt->fetch(PDO::FETCH_ASSOC);
 		return $user;

 	}

 }

