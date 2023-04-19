<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Qualificações</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
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
            <h1>webnarios</h1>
          </div>
        </div>
      </div>
    </div>
    
    <?php
	      require_once("postsystem/admin/conexao/conecta.php");
	      require("postsystem/admin/functions/limita-texto.php");
      ?> 
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

           $quantidade = 4;
           $inicio = ($pg*$quantidade) - $quantidade;
           $sql = "SELECT * from tb_webnarios ORDER BY id DESC LIMIT $inicio, $quantidade";
           try{
             $resultado = $conexao->prepare($sql);
             $resultado->execute();
             $contar = $resultado->rowCount();
             
             if($contar > 0 ){
               while($exibe = $resultado->fetch(PDO::FETCH_OBJ)){
          ?>
        <div class= "row justify-content-center">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="postsystem/upload/webnarios/<?php echo $exibe->imagem;?>" alt="<?php echo $exibe->titulo;?>" title="<?php echo $exibe->titulo;?>" alt="Card image cap">
              <div class="card-body">
                <h3 class="card-title"><?php echo $exibe->titulo;?></h3>
                <p class="card-text"><?php echo limitarTexto($exibe->descricao, $limite=100)?></p>
                <br>
                <!--<a href="pesquisa.php?id=<?php echo $exibe->id;?>" class="btn text-white" style="background-color: #8D38D0;">Leia o artigo completo</a>-->
                <br><br>
              </div>
          </div>
          <br><br>
          <?php
             }//while
	               }else{
		                echo '<li>Não existe post cadastrados no sistema</li>';
	              }
				
	              }catch(PDOException $erro){ echo $erro;}
             ?> 
        </div>
      </div>
    </div> 
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
            $sql = "SELECT * from tb_webnarios";
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
          <a href="webnarios.php?pg=1">Primeira Página</a>
          <?php 
             if(isset($_GET['pg'])){
              $num_pg = $_GET['pg'];	
            }
            for($i = $pg-$links; $i <= $pg-1; $i++){
              if($i<=0){}
              else{ 
          ?>
          <a href="webnarios.php?pg=<?php echo $i;?>"  class="ativo<?php echo $i;?>"><?php echo $i;?></a>
  <?php  }} ?>
          <a href="webnarios.php?pg=<?php echo $pg;?>" class="ativo<?php echo $i;?>"><?php echo $pg;?></a>
          <?php
	            for($i = $pg+1; $i <= $pg+$links; $i++){
		               if($i>$paginas){}
		               else{
          ?>
          <a href="webnarios.php?pg=<?php echo $i;?>" class="ativo<?php echo $i;?>"><?php echo $i;?></a>
          <?php
	          	}
          	}
          ?>
          <a href="webnarios.php?pg=<?php echo $paginas;?>">Última página</a>
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