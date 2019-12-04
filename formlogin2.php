<?php

require_once 'functions.php';

if (estaLogado()){
echo '
<!-- LOGADO -->
          <div class="sidebar-heading">
        Usuarios
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Perfil</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">O que voce deseja fazer?:</h6>
            <a class="collapse-item" href="perfil.php">Ver Perfil</a>
            <a class="collapse-item" href="index.php">Alterar Perfil</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Meus Animais</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Busca:</h6>
            <a class="collapse-item" href="index.php">Recentes</a>
            <a class="collapse-item" href="index.php">Todos</a>
            
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

<!-- LOGADO -->

';
}else{
	echo '
          <hr class="sidebar-divider">
          <li class="nav-item">
        <a class="nav-link " href="#"  data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          
          <span>Efetue o Login par acesso completo</span>
        </a>
        <hr class="sidebar-divider">
	';
}
