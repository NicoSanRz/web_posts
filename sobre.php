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
          <h1>Sobre</h1>
          <span>Informações sobre nossa equipe e sobre o projeto.</span>
        </div>
      </div>
    </div>
  </div>
  <section class="sec_sobre row justify-content-center">
    <h4 class="titulo_sobr">Sistema de Vigilância Alimentar e Nutricional</h4>
    <article class="sobre_equipe">
      <br>
      <p class="sobre_text">O Observatório de Vigilância Alimentar e Nutricional (OVAN) é o resultado de um coletivo de professores, estudantes de graduação e pós-graduação, nutricionistas vinculados a Universidade Federal de Santa Maria, Universidade Federal do Pampa, Universidade de Passo Fundo, Universidade Regional do Noroeste do Estado do Rio Grande do Sul, Secretaria do Estado do Rio Grande do Sul e Coordenadorias Regionais de Saúde do Rio Grande do Sul.
O OVAN está vinculado ao projeto matricial intitulado “Qualificação da Vigilância Alimentar e Nutricional: uma proposta de educação permanente para melhoria da qualidade da atenção à saúde nos municípios do RS” com apoio financeiro da Fundação de Amparo à Pesquisa do Estado do Rio Grande do Sul. O OVAN possui objetivo em fortalecer a organização e operacionalização da Vigilância Alimentar e Nutricional (VAN).
Configura-se como um espaço para ampliar reflexões e promover o diálogo sobre a prática entre profissionais, além de ser um instrumento de apoio aos atores da VAN por meio do compartilhamento de experiências, contribuindo para o conhecimento científico e na tomada de decisões para formulação ou reorientação de políticas públicas.
</p>

    </article>
  </section>
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