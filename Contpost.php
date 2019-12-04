<?php

class contPost
{
public $idposts;
public $foto;
public $descricao;
public $contPost;
}

/*<?php
                    require_once "ContpostDAO.php";
                    $p = new ContpostDAO();
                    // consultar e trazer a oarray de imagens
                    $posts = $p->getPosts();
?>
                    <?php foreach ($posts  as $key => $value) : ?>
                      <br>
                      <div class='col-sm-12'>
                        <div class="card shadow mb-4">
                            
                            <a href="<?php echo $value['foto'] ?>"><img width="100%" src="<?php echo $value['foto'] ?>"></a><br>
                            
                        </div>    
                      </div>
                    <?php endforeach; ?>