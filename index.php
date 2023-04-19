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

   
    <!------------------------------ INICIO DO BANNER ------------------------------------------->
    <div class="main-banner header-text" id="top">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="Modern-Slider">

          <!--------------------------------Banner 1 -------------------------------------------->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h4>Entre em<br>Contato<br></h4>
                  <a href="contato.php" class="filled-button">contato</a>
                </div>
            </div>
          </div>
          <!------------------------------------------------------------------------------------>

          <!-------------------------------------Banner 2 ---------------------------------------->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h4>Sobre<br>Nós</h4>
                  <a href="sobre.php" class="filled-button">Saiba mais</a>
                </div>
            </div>
          </div>
          <!-------------------------------------------------------------------------------------->

          <!---------------------------------------Banner 3----------------------------------------->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h4>Sobre nossa<br>Equipe</h4>
                  <p></p>
                  <a href="equipe.php" class="filled-button">Saiba mais</a>
                </div>
            </div>
          </div>
          <!----------------------------------------------------------------------------------------->

        </div>
    </div>
    <!---------------------------------------------------------------------------------------------------------->

    <!----------------------------------------------------------areas TEMATIcAS------------------------------->
      
    <div class="partners">
      <h3><em>Notícias em Destaque</em></h3>
      <p>Materias em destaques referente.</p>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel owl-nav">
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
              $sql = "SELECT * from tb_postagens WHERE exibir='Sim' ORDER BY id DESC LIMIT $inicio, $quantidade";
              try{
                $resultado = $conexao->prepare($sql);
                $resultado->execute();
                $contar = $resultado->rowCount();
                
                if($contar > 0 ){
                  while($exibe = $resultado->fetch(PDO::FETCH_OBJ)){
             ?>
             
             <div class="card">
               <img class="card-img-top" src="postsystem/upload/postagens/<?php echo $exibe->imagem;?>" alt="<?php echo $exibe->titulo;?>" title="<?php echo $exibe->titulo;?>" alt="Card image cap">
               <div class="card-body">
                 <a href="destaque.php?id=<?php echo $exibe->id;?>" class="btn text-white" style="background-color: #8D38D0;"><?php echo $exibe->titulo;?></a>
               </div>
              </div>
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
      </div>
    </div>

    <!---------------------------------------------------------------------------------------------->

    <!----------------------------------------------Links Uteis------------------------------------------->
   
    <!---------------------------------------------------------------------------------->


    <!-------------------------------------EQUIPE-------------------------------------->
    

    <!---------------------------------------------------------------------------------->

    <!-----------------------------------contato inicial--------------------------------

    <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Solicite um <em>Contato!</em></h2>
              <span>Preencha os dados e deixe sua mensagem!</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="./contato.php" method="post">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Nome" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Telefone" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Sua Mensagem..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="border-button">Enviar mensagem</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>-->

    <!------------------------------------------------------------------------------>

    <!--------------INSTITUIÇÕES PARCEIRAS DO PROJETO ------------------------------>

    <div class="partners2">
      <h3>Instituções<em>PARCEIRAS</em></h3>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
            
              <div class="partner-item2">
                <img src="assets/images/ufsm.png" title="1" alt="1">
              </div>
              
              <div class="partner-item2">
                <img src="assets/images/unijui.png" title="2" alt="2">
              </div>
              
              <div class="partner-item2">
                <img src="assets/images/unipar.png" title="3" alt="3">
              </div>
              
              <div class="partner-item2">
                <img src="assets/images/upf.png" title="4" alt="4">
              </div>
              
              <div class="partner-item2">
                <img src="assets/images/seces.png" title="5" alt="5">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!----------------------------------------------------------------------------------->

    <!----------------------------- Footer IINICIA AQUI --------------------------------->
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