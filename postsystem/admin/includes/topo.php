<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="home.php">OVAN - Página de Atualização de Conteúdos</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-male"></i> Administradores <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="home.php?acao=ver-contas">Visualizar Usuários</a></li>
              <li><a href="home.php?acao=cad-conta">Adicionar Usuários</a></li>
              <!--<li><a href="javascript:;">Site em Manutenção</a></li>-->
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> <?php echo $nomeLogado;?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Perfil</a></li>
              <li><a href="?sair" onClick="return confirm('Deseja realmente sair do Sistema?')">Sair</a></li>
            </ul>
          </li>
        </ul>
        <form action="home.php?acao=ver-postagens" method="post" enctype="multipart/form-data" class="navbar-search pull-right">
          <input type="text" class="search-query" name="palavra-busca" placeholder="pesquisar">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
<?php if(isset($_GET['acao'])){	$acao = $_GET['acao'];}else{$acao ='home';}?>    
    
      <ul class="mainnav">
        <li <?php if($acao =="welcome" || ($acao =="home")){echo 'class="active"';}?>><a href="home.php"><i class="icon-home"></i><span>Homepage</span> </a> </li>
        
        <?php if($nivelLogado ==1){?>
        <li class="<?php if($acao =="ver-postagens" || ($acao =="cad-postagem")){echo "active";}?> dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-file"></i><span>Notícias</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="home.php?acao=ver-postagens">Visualizar</a></li>
            <li><a href="home.php?acao=cad-postagem">Cadastrar</a></li>
          </ul>
        </li>
        <?php }?>
        <!--<li class="<?php if($acao =="ver-contas" || ($acao =="cad-conta")){echo "active";}?> dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><span>Usuários</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="home.php?acao=ver-contas">Visualizar</a></li>
            <li><a href="home.php?acao=cad-conta">Cadastrar</a></li>
          </ul>
        </li>-->
        <li class="<?php if($acao =="ver-biblio" || ($acao =="cad-biblio")){echo "active";}?> dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-folder-open"></i><span>Materiais Técnicos</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="home.php?acao=ver-biblio">Visualizar</a></li>
            <li><a href="home.php?acao=cad-biblio">Cadastrar</a></li>
          </ul>
        </li>
        <li class="<?php if($acao =="ver-equipe" || ($acao =="cad-equipe")){echo "active";}?> dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-group"></i><span>Equipe</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="home.php?acao=ver-equipe">Visualizar</a></li>
            <li><a href="home.php?acao=cad-equipe">Cadastrar</a></li>
          </ul>
        </li>
        <li class="<?php if($acao =="ver-port" || ($acao =="cad-port")){echo "active";}?> dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-book"></i><span>Portarias </span><spam>e Legislações</spam> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="home.php?acao=ver-port">Visualizar</a></li>
            <li><a href="home.php?acao=cad-port">Cadastrar</a></li>
          </ul>
        </li>
        <li class="<?php if($acao =="ver-pesquisa" || ($acao =="cad-pesquisa")){echo "active";}?> dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-search"></i><span>Pesquisas</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="home.php?acao=ver-pesquisa">Visualizar</a></li>
            <li><a href="home.php?acao=cad-pesquisa">Cadastrar</a></li>
          </ul>
        </li>
        <li class="<?php if($acao =="ver-eventos" || ($acao =="cad-eventos")){echo "active";}?> dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-calendar"></i><span>Eventos</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="home.php?acao=ver-eventos">Visualizar</a></li>
            <li><a href="home.php?acao=cad-eventos">Cadastrar</a></li>
          </ul>
        </li>
        <li class="<?php if($acao =="ver-cursos" || ($acao =="cad-cursos")){echo "active";}?> dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-tablet"></i><span>Cursos</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="home.php?acao=ver-cursos">Visualizar</a></li>
            <li><a href="home.php?acao=cad-cursos">Cadastrar</a></li>
          </ul>
        </li>
        <li class="<?php if($acao =="ver-web" || ($acao =="cad-web")){echo "active";}?> dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-signal"></i><span>Webnários</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="home.php?acao=ver-web">Visualizar</a></li>
            <li><a href="home.php?acao=cad-web">Cadastrar</a></li>
          </ul>
        </li>
        <li class="<?php if($acao =="ver-coberturas" || ($acao =="cad-coberturas")){echo "active";}?> dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-paste"></i><span>Coberturas</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="home.php?acao=ver-coberturas">Visualizar</a></li>
            <li><a href="home.php?acao=cad-coberturas">Cadastrar</a></li>
          </ul>
        </li>
        <li class="<?php if($acao =="ver-relatos" || ($acao =="cad-relatos")){echo "active";}?> dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-pencil"></i><span>Relatos</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="home.php?acao=ver-relatos">Visualizar</a></li>
            <li><a href="home.php?acao=cad-relatos">Cadastrar</a></li>
          </ul>
        </li>
        <!--<li><a href="#"><i class="icon-globe"></i><span>Manut. Site</span> </a></li>-->
        <li></li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->