<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Destaques</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="all">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<!--

-->
  </head>

  <body>

    <!--------------------------------- Header ------------------------------------->
    <?php include("includes/header.php");?>
    <!----------------------------------------------------------------------------->

    <!------------------------------- Header sub  -------------------------------->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Notícias</h1>
            <!--<span>Principais fontes de conhecimento...</span>-->
          </div>
        </div>
      </div>
    </div>

    <div class="single-services">
      <?php
	      require_once("postsystem/admin/conexao/conecta.php");
	      require("postsystem/admin/functions/limita-texto.php");
      ?>   
      <div class="divcenter">

          <ul class="boxposts">

          <?php 
           if(empty($_GET['pg'])){}
           else{ 
           $pg =$_GET['pg'];
           if(!is_numeric($pg)){
            
             echo '<script language= "JavaScript">
                     location.href="index.php";
               </script>';
           }
          
           }

           if(isset($pg)){ $pg = $_GET['pg'];}else{ $pg = 1;}

           $quantidade = 3;
           $inicio = ($pg*$quantidade) - $quantidade;
           $sql = "SELECT * from tb_postagens WHERE exibir='Sim' ORDER BY id DESC LIMIT $inicio, $quantidade";
           try{
             $resultado = $conexao->prepare($sql);
             $resultado->execute();
             $contar = $resultado->rowCount();
             
             if($contar > 0 ){
               while($exibe = $resultado->fetch(PDO::FETCH_OBJ)){
          ?>
          <div class="card d-flex justify-content-center container" style="width: 50rem;">
              <img class="card-img-top" src="postsystem/upload/postagens/<?php echo $exibe->imagem;?>" alt="<?php echo $exibe->titulo;?>" title="<?php echo $exibe->titulo;?>" alt="Card image cap">
              <div class="card-body">
                <h3 class="card-title"><?php echo $exibe->titulo;?></h3>
                <p class="card-text"><?php echo limitarTexto($exibe->descricao, $limite=200)?></p>
                <br>
                <a href="destaque.php?id=<?php echo $exibe->id;?>" class="btn text-white" style="background-color: #8D38D0;">Leia o artigo completo</a>
                <br><br>
                <span class="datapost">Data de Publicação: <?php echo $exibe->data;?></span>
              </div>
          </div>
          <br><br>
          <!--<li>            	
                <span class="thumb">
                	<img src="postsystem/upload/postagens/<?php echo $exibe->imagem;?>" alt="<?php echo $exibe->titulo;?>" title="<?php echo $exibe->titulo;?>" width="166" height="166">
                </span>                
                <span class="content">
                	<h1><?php echo $exibe->titulo;?></h1>
                    <p><?php echo limitarTexto($exibe->descricao, $limite=380)?></p> 
                    <div class="footer_post">
                      <br>
                    	<a class="text-white" href="postsystem/post.php?id=<?php echo $exibe->id;?>"> ->Leia o artigo completo</a>
                      <br>
                      <br>
                      <span class="datapost">Data de Publicação: <strong><?php echo $exibe->data;?></strong></span> 
                                               
                    </div>                   
                </span>                
          </li>-->
            <?php
             }//while
	               }else{
		                echo '<li>Não existe post cadastrados no sistema</li>';
	              }
				
	              }catch(PDOException $erro){ echo $erro;}
             ?> 
        </ul>
        <style>
          .paginas{width:100%;padding:10px 0;text-align:center;background:#fff;height:auto;margin:10px auto;}
          .paginas a{width:auto;padding:4px 10px;background:#eee;color:#333;margin:0px 2.5px;text-decoration:none;font-family:tahoma, "Trebuchet Ms", arial;font-size:13px; }
          .paginas a:hover{text-decoration:none;background:#00BA8B; color:#fff;}
          <?php
	            if(isset($_GET['pg'])){
		               $num_pg = $_GET['pg'];	
	            }else{$num_pg = 1;}
          ?>

          .paginas a.ativo<?php echo $num_pg;?>{background:#00BA8B; color:#fff;}
        </style>
        <?php
            $sql = "SELECT * from tb_postagens";
            try{
              $result = $conexao->prepare($sql);			
              $result->execute();
              $totalRegistros = $result->rowCount();
            }catch(PDOException $e){
              echo $e;
            }
            
            if($totalRegistros <=$quantidade){}
            else{
              $paginas = ceil($totalRegistros/$quantidade);
              if($pg > $paginas){
                echo '<script language= "JavaScript">
                  location.href="index.php";
                  </script>';}
              $links = 5;	
              
              if(isset($i)){}
              else{$i = '1';}
        ?>
        <div class="paginas">
          <a href="destaques.php?pg=1">Primeira Página</a>
          <?php 
             if(isset($_GET['pg'])){
              $num_pg = $_GET['pg'];	
            }
            for($i = $pg-$links; $i <= $pg-1; $i++){
              if($i<=0){}
              else{ 
          ?>
          <a href="destaques.php?pg=<?php echo $i;?>"  class="ativo<?php echo $i;?>"><?php echo $i;?></a>
  <?php  }} ?>
          <a href="destaque.php?pg=<?php echo $pg;?>" class="ativo<?php echo $i;?>"><?php echo $pg;?></a>
          <?php
	            for($i = $pg+1; $i <= $pg+$links; $i++){
		               if($i>$paginas){}
		               else{
          ?>
          <a href="destaques.php?pg=<?php echo $i;?>" class="ativo<?php echo $i;?>"><?php echo $i;?></a>
          <?php
	          	}
          	}
          ?>
          <a href="destaques.php?pg=<?php echo $paginas;?>">Última página</a>
        </div>

        <?php
		        }
           ?>
      </div>
    </div>

    



    <!--------------------------- Footer iNICIA AQUI -------------------------------->
    <?php include("includes/footer.php");?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; 
      function clearField(t){                  
      if(! cleared[t.id]){                      
          cleared[t.id] = 1;  
          t.value='';        
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>