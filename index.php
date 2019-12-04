<?php
session_start();


$imagem = [];

for($i=0; $i<100; $i++) :
  $imagem[] = ['imagem' => 'imagem'.$i.'.png', 'descricao' => 'DEscricao'. $i];
endfor;   

// echo '<pre>';
// var_dump($imagem);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Melhor Amigo</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
     
</script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-dog"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Melhor Amigo <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-home"></i>
          <span>Inicio</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="explore.php">
          <i class="fas fa-atom"></i>
          <span>Gerenciador</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <!-- FORM LOGIN ou INFO USUARIO -->
<?php include_once "formLogin2.php"; ?>
<!-- FORM LOGIN ou INFO USUARIO -->
      <!-- Heading -->
      <div class="sidebar-heading">
        Buscas
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Faca uma Busca</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">O que deseja buscar?</h6>
            <a class="collapse-item" href="index.php">Animais</a>
            <a class="collapse-item" href="index.php">Usuarios</a>
            
          </div>
        </div>
      </li>
      

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="f"></i>
          <span></span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class=""></i>
          <span></span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
<!-- FORM LOGIN ou INFO USUARIO -->
<?php include_once "formLogin.php"; ?>
<!-- FORM LOGIN ou INFO USUARIO -->

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">O LUGAR CERTO PARA ADOTAR UM CAO</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Indique Amigos</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
           <div class="card-body row">
                  <div class="col-lg-12">

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Novo Post</h6>
                </div>
                <div class="card-body col-lg-12">
                  <form method="post" action="novoPost.php" enctype="multipart/form-data">
                    <div class="input-group">
                    <input type="text" name= "nome" class="form-control bg-light border-0 small" placeholder="Digite o nome do animal" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                    
                    </button>
                      <div class="input-group">
                    <input type="text" name= "descricao" class="form-control bg-light border-0 small" placeholder="Digite o texto do seu post" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">

                    
                    </div>
                    <span class="text"></span>
                    </button>
                    <div class="input-group col-lg-4">
                    <input type="file" name="foto" class="form-control bg-light border-0 small" placeholder="Digite o Caminho do Arquivo" aria-label="Search" aria-describedby="basic-addon2"></div>
                    <div class="input-group-append">
                    <button type="submit" class="btn btn-primary" type="button">
                    <i class="fas fa-flag"></i>

                    <span class="text">Inserir Post</span>
                    </button>

                  </form>

              </div>

            </div>
                  
                  
                  
                </div>
              </div>

            </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->




            <div class="col-xl-9 col-lg-9">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Posts</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Filtrar:</div>
                      <a class="dropdown-item" href="#">Raca</a>
                      <a class="dropdown-item" href="#">Cidade</a>
                      <a class="dropdown-item" href="#">Porte</a>
                      <a class="dropdown-item" href="#">Sexo</a>
                      <a class="dropdown-item" href="#">Idade</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Busca Especifica</a>
                      
                    </div>
                    -
                  </div>
                </div>
<!-- * * * * * postagem * * * * * -->

                <!-- Card Body -->
               


<!-- * * * * * T I M E L I N E * * * * * -->

                <div class="card-body row">




<?php
                    require_once "PostDAO.php";
                    require_once "UserDAO.php";
                    $p = new PostDAO();
                    
                    // consultar e trazer a oarray de imagens
                    $posts = $p->getPosts();
                   
?>
                    <?php foreach ($posts  as $key => $value) : ?>
                      
                      <br>
                      <div class='col-sm-12'>
                        <div class="card shadow mb-4">
                            <table style="width: 35%">
                              <tr><th><img width="60px" height="60px"  src="<?php echo $value['fotouser'] ?>"></a></th>
                              <th><h6 class="m-0 font-weight-bold text-primary"><div><?php echo $value['user'] ?></h6>
                              <table><tr><th><span>Postado em:</span></th><th><div><?php echo  $value['dt_criacao'] ?></div></th></tr></th></tr></table>
                            </table>

                              <p><a href="<?php echo $value['foto'] ?>"><img border="10px" width="100%" style="padding: 20px" src="<?php echo $value['foto'] ?>"></a><br>
                              <h6 class="m-0 font-weight-bold text-primary"><?php echo $value['nomeanimal'] ?></h6>  
                              <span><?php echo $value['descricao'] ?></span>
                        </div>    
                      </div>
                    <?php endforeach; ?>


                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Proximos Eventos</h6>
                </div>


<?php
                  require_once "AnuncioDAO.php";
                  $p = new AnuncioDAO();
                  // consultar e trazer a oarray de imagens
                  $anuncios = $p->getAnuncios();
?>
                  <?php foreach ($anuncios  as $key => $value) : ?>
                    <br>
                    <div class='col-sm-12'>
                      <div class="card shadow mb-4">
                        <b><?php echo  $value['titulo']?>
                        <a href="<?php echo $value['foto'] ?>"><img width="100%" src="<?php echo $value['foto'] ?>"></a><br>
                        <?php echo  $value['descricao']?>
                        
                      </div>    
                    </div>
                  <?php endforeach; ?>
              </div>
            </div>
          </div>

            <!-- Pie Chart -->
            
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Links Patrocinados</span>

          
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
