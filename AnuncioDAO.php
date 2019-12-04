</<?php 

require_once 'Anuncio.php';
require_once 'Database.php';

 class AnuncioDAO{
 	private $conexao;

 	public function __construct(){
 		$db = new Database();
 		$this->conexao = $db->getConexao();
 	}

 	public function getAnuncios(){
// 		$sql = "select * from anuncios where DATE(dt_fim) >= DATE(NOW()) and status=1 limit 5 ORDER BY RAND()";
 		$sql = "select * from anuncios where  status=1 ORDER BY RAND() limit 5";
 		$stmt = $this->conexao->query($sql);
 		$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
 		return $posts;

 	}

 }
 