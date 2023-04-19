<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <title>Observatório</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>



</head>

<body>


  <!-- Menu/CABEÇALHO -->
  <?php include("includes/header.php");?>
  <!---------------------------------- SOBRE - HISTORIA -------------------------------------------->
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>O qUE é VAN?</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <article class="sobre_equipe">
      <br><br>
      <h8 class="sobre_text"> A Vigilância Alimentar e Nutricional (VAN) consiste na descrição contínua e na predição  
      <br>de tendências das condições de alimentação e nutrição da população e seus fatores 
      <br>determinantes. A sua operacionalização pelos profissionais de saúde enfrenta dificuldades 
      <br>e a capacitação desses é uma barreira na execução e organização da VAN. A construção 
      <br>de espaços de diálogo entre atores da VAN, como a criação de um observatório, pode ser 
      <br>uma estratégia para melhorar a sua operacionalização e organização.
      <br></h8>
    </article>
</div>
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










  <!---------------------------------------------informações---------------------------------->


    <!------------------------------------------------------------------------------------------>


  <!-- Footer INICIA AQUI -->
  <?php include("includes/footer.php");?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/accordions.js"></script>

  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; 
    function clearField(t) {
      if (!cleared[t.id]) { 
        cleared[t.id] = 1; 
        t.value = ''; 
        t.style.color = '#fff';
      }
    }
  </script>

</body>

</html>