<?php
	require_once("postsystem/admin/conexao/conecta.php");
	require("postsystem/admin/functions/limita-texto.php");
?> 
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Observatório</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel='stylesheet' type='text/css' href='assets/css/eslilo.php'>



  </head>

  <body>

    <!--------------------------------------Menu/CABEÇALHO--------------------------------------------->
    <?php include("includes/header.php");?>
    <!----------------------------------------------------------------------------------------->
    
    <!------------------------------- Header sub  -------------------------------->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Portarias e Legislações</h1>
          </div>
        </div>
      </div>
    </div>
    <!-------------------------------  -------------------------------->

    <!------------------------------- Lista Docentes da UFSM -------------------------------->
    <br><br>
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
              $sql = "SELECT * from tb_portarias ORDER BY id DESC LIMIT $inicio, $quantidade";
              try{
                $resultado = $conexao->prepare($sql);
                $resultado->execute();
                $contar = $resultado->rowCount();
                
                if($contar > 0 ){
                  while($exibe = $resultado->fetch(PDO::FETCH_OBJ)){
             ?>
    <div class="container list-group">
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1"><?php echo $exibe->titulo;?></h5>
          </div>
          <p class="mb-1"><?php echo $exibe->descricao;?></small>
        </a>
    </div>
              <?php
                }//while
                   }else{
                      echo '<li>Não existe dados cadastrados no sistema</li>';
                 }
                }catch(PDOException $erro){ echo $erro;}
                 
              ?> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!----------------------------- Footer INICIA AQUI --------------------------------->
    <?php include("includes/footer.php");?>

     <!-- Bootstrap core JavaScript -->
     <script src="vendor/jquery/jquery.min.js"></script>
     <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

     <!--  Scripts adicionais -->
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