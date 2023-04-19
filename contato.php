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

   
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Contato</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container section-heading" style="content-align: center">
      <div class="row justify-content-center">
        <div class="col-sm-8">
        <br>
          <span class="card-text">Observatório de Vigilância Alimentar e Nutricional – RS (OVAN)<br><br>Coordenação Profª Drª Vanessa Ramos Kirsten<br><br>E-mail: ovan@ufsm.br<br><br>Site: www.ufsm.br/projetos/institucional/ovan<br><br>Instagram: @ovan_observatorio<br><br>Youtube: youtube.com/channel</span>
        </div>
      </div><br>
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