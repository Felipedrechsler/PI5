</<?php 

require_once 'Post.php';
require_once 'Database.php';

 class PostDAO{
 	private $conexao;

 	public function __construct(){
 		$db = new Database();
 		$this->conexao = $db->getConexao();
 	}

 	public function getPosts(){
 		$sql = "SELECT p.idposts, p.descricao, p.foto, p.dt_criacao, p.dt_fim, p.nomeanimal, u.nome as user, u.foto as fotouser FROM posts as p join users as u on u.idusers=p.id_user order by p.dt_criacao DESC";
 		$stmt = $this->conexao->query($sql);
 		$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
 		return $posts;

 	}

 	public function inserirPosts($foto, $descricao, $id_user, $nomeanimal){
 		$sql = "insert into posts (foto, descricao, id_user, nomeanimal) values (:foto, :descricao, :id_user, :nomeanimal)";
 		$stmt = $this->conexao->prepare($sql);
 		$stmt->bindParam(":foto", $foto);
 		$stmt->bindParam(":descricao", $descricao);
 		$stmt->bindParam(":id_user", $id_user);
 		$stmt->bindParam(":nomeanimal", $nomeanimal);
 		try{
 		$stmt->execute();
 		return true;
 		}
 		catch(Exception $e){
 			echo $e->getMessage();
 		}
 	}

 	public function contPosts(){
 		$sql = "select count(*) as total from posts";
 		$stmt = $this->conexao->query($sql);
 		$conta = $stmt->fetch(PDO::FETCH_ASSOC);
 		return $conta['total'];
 	}

 }
