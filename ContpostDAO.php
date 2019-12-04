<?php 

require_once 'Contpost.php';
require_once 'Database.php';

 class ContpostDAO{
 	private $conexao;

 	public function __construct(){
 		$db = new Database();
 		$this->conexao = $db->getConexao();
 	}

 	public function getContPosts(){
 		$sql = "SELECT COUNT(idposts) FROM posts";
 		
 		return $sql;

 	}

 }
 