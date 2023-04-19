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
    <link rel="stylesheet" href="./assets/css/form.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  </head>


  <?php include("includes/header.php");?>
    <!-------------------------------------------------------------------------------------->
 
    <div class="testbox">
        <form action="/">
          <div class="banner">
            <h1>Relato de Expêriencia</h1>
          </div>
          <br/>
          <h2>Envie-nos o seu relato!</h2>
          
          <h5>Apenas arquivos de texto serão aceitos!</h5>
          <br/>
          <div class="colums">
            <?php
          if(isset($_POST['cadastrar'])){
		             	$titulo 		= trim(strip_tags($_POST['titulo']));
		             	$data 			= trim(strip_tags($_POST['data']));
			            $exibir 		= trim(strip_tags($_POST['exibir']));
			            $descricao	 	= $_POST['descricao'];

                  //INFO IMAGEM
		$file 		= $_FILES['text'];
		$numFile	= count(array_filter($file['name']));
		
		//PASTA
		$folder		= 'postsystem/admin/relatos/';
		
		//REQUISITOS
		$permite 	= array('text/txt', 'text/pdf', 'text/docx', 'text/doc');
		$maxSize	= 1024 * 1024 * 5;
		
		//MENSAGENS
		$msg		= array();
		$errorMsg	= array(
			1 => 'O arquivo no upload é maior do que o limite definido em upload_max_filesize no php.ini.',
			2 => 'O arquivo ultrapassa o limite de tamanho em MAX_FILE_SIZE que foi especificado no formulário HTML',
			3 => 'o upload do arquivo foi feito parcialmente',
			4 => 'Não foi feito o upload do arquivo'
		);
    if($numFile <= 0){
			echo '<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						Selecione um arquivo e tente novamente!
					</div>';
		}
    else if($numFile >=2){
			echo '<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						Você ultrapassou o limite de upload. Selecione apenas um arquivo e tente novamente!
					</div>';
		}else{
			for($i = 0; $i < $numFile; $i++){
				$name 	= $file['name'][$i];
				$type	= $file['type'][$i];
				$size	= $file['size'][$i];
				$error	= $file['error'][$i];
				$tmp	= $file['tmp_name'][$i];
				
				$extensao = @end(explode('.', $name));
				$novoNome = rand().".$extensao";
				
				if($error != 0)
					echo $msg[] = "<b>$name :</b> ".$errorMsg[$error];
				else if(!in_array($type, $permite))
					echo $msg[] = "<b>$name :</b> Erro imagem não suportada!";
				else if($size > $maxSize)
					echo $msg[] = "<b>$name :</b> Erro imagem ultrapassa o limite de 5MB";
				else{
					
					if(move_uploaded_file($tmp, $folder.'/'.$novoNome)){
						//$msg[] = "<b>$name :</b> Upload Realizado com Sucesso!";
					
			$insert = "INSERT into tb_postagens (titulo, data, imagem, exibir, descricao) VALUES (:titulo, :data, :imagem, :exibir, :descricao)";
      try{
        $result = $conexao->prepare($insert);
        $result->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $result->bindParam(':data', $data, PDO::PARAM_STR);
        $result->bindParam(':imagem', $novoNome, PDO::PARAM_STR);
        $result->bindParam(':exibir', $exibir, PDO::PARAM_STR);
        $result->bindParam(':descricao', $descricao, PDO::PARAM_STR);
        $result->execute();
        $contar = $result->rowCount();
        if($contar>0){
          echo '<div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Sucesso!</strong> O post foi cadastrado.
                  </div>';
        }else{
          echo '<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Erro ao cadastrar!</strong> Não foi possível cadastrar o post.
                  </div>';
        }
      }catch(PDOException $e){
        echo $e;
      }

    }else
    $msg[] = "<b>$name :</b> Desculpe! Ocorreu um erro...";

}

                  ?>
            
          </div>
          <div class="control-group">											
            <label class="control-label" for="lastname">Relato</label>
            <div class="controls">
              <input type="file" multiple class="span6 fileinput" id="texto" name="text[]">
            </div> <!-- /controls -->				
          </div> <!-- /control-group -->
          <div class="btn-block">
            <button type="submit" href="/">Enviar</button>
          </div>
        </form>
      </div>
    




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


</html>