<?php
	require_once("postsystem/admin/conexao/conecta.php");
	require("postsystem/admin/functions/limita-texto.php");
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <meta charset="utf-8">

    <title>POSTS</title>
    <link rel="stylesheet" type="text/css" href="postsystem/css/reset.css" media="all">
    <link rel="stylesheet" type="text/css" href="postsystem/css/estilo.css" media="all">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

<body>
<!--------------------------------- Header ------------------------------------->
     <?php include("includes/header.php");?>
    <!----------------------------------------------------------------------------->

	<div class="divcenter">
    
    
    	<ul class="boxposts" id="pgPost">
        
<?php
	if(isset($_GET['id'])){
		$idUrl = $_GET['id'];
	}
	$sql = "SELECT * from tb_biblioteca WHERE id=:id LIMIT 1";
	try{
		$resultado = $conexao->prepare($sql);
		$resultado->bindParam('id',$idUrl, PDO::PARAM_INT);
		$resultado->execute();
		$contar = $resultado->rowCount();
		
		if($contar > 0 ){
			while($exibe = $resultado->fetch(PDO::FETCH_OBJ)){
?>        
        	<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<li>            	
                <span class="thumb">
                	<img src="postsystem/upload/biblioteca/<?php echo $exibe->imagem;?>" alt="<?php echo $exibe->titulo;?>" title="<?php echo $exibe->titulo;?>" width="166" height="166">
                </span>                
                <span class="content">
                	<h1><?php echo $exibe->titulo;?></h1>
                    <p><?php echo ($exibe->descricao)?></p> 
                    <div class="footer_post">
                    	<a href="javascript:history.back()">Voltar para página anterior</a>                       
                    </div><!-- footer post -->                    
                </span>                
            </li>  
<?php
}//while
	}else{
		echo '<li>Não existe post cadastrados no sistema</li>';
	}
				
	}catch(PDOException $erro){ echo $erro;}
?>            
        
        <!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="fb-comments" data-href="http://wesleydesign.com.br/wvasystem/post.php?id=<?php echo $idUrl;?>" data-width="100%" data-numposts="5"></div>-->        
        
        
           
                  
        </ul>
        


        
    
    </div><!-- div center -->
	<!----------------------------- Footer IINICIA AQUI --------------------------------->
  <?php include("includes/footer.php");?>


</body>
</html>