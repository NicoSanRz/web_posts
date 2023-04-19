<div class="main">
  <div class="main-inner">
    <div class="container">
     <div class="row">
     
     		
            <div class="span12">
            
            <?php
				if(isset($_GET['acao'])){
					$acao = $_GET['acao'];
					if($acao=='welcome'){
						echo 
               '<div class="alert alert-info">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Olá, '.$nomeLogado.'!</strong> Seja Bem vindo ao <strong>WVA System</strong> !
               </div>';
					}
				}
			 ?>  
      		</div>
            
            
            <div class="span12">	      		
	      		<div id="target-1" class="widget">	      			
	      			<div class="widget-content">	      				
			      		<h1>OVAN- Painel de Contas</h1>			      		
			      		<p>Painel de gerenciamento de Contas Administradoras do site!
                </p>
                        
		      		</div> <!-- /widget-content -->
	      		</div> <!-- /widget -->
      		</div><!-- span 12 -->
            
            
    </div><!-- row --> 
    <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Contas Administradoras</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> ID</th>
                    <th> Nome </th>
                    <th> Usuário</th>
                    <th> Email</th>
                    <th> Nível</th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody> 
<?php 
if(empty($_GET['pg'])){}
else{ 
$pg =$_GET['pg'];
if(!is_numeric($pg)){
	
	echo '<script language= "JavaScript">
					location.href="home.php?acao=ver-contas";
		</script>';
}
}

if(isset($pg)){ $pg = $_GET['pg'];}else{ $pg = 1;}

if(isset($_POST['palavra-busca'])){
	$quantidade = 10000;
}else{
	$quantidade = 10;
}


$inicio = ($pg*$quantidade) - $quantidade;

  //retorno de clientes para a listagem
  $get_login = "SELECT * FROM login";
  $contagem =1;
  try{
    $result = $conexao->prepare($get_login);			
    $result->execute();
    $contar = $result->rowCount();
    if($contar>0){
        while($mostra = $result->FETCH(PDO::FETCH_OBJ)){
?>
        <tr>
          <!--<td><?php echo $contagem++;?></td>-->
          <td> <?php echo $mostra->id;?> </td>
          <td> <?php echo $mostra->nome;?> </td>
          <td> <?php echo $mostra->usuario;?> </td>
          <td> <?php echo $mostra->email;?> </td>
          <td> <?php echo $mostra->nivel;?> </td>
          <td class="td-actions"><a href="home.php?acao=editar-contas&id=<?php echo $mostra->id;?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a>
          
          <a href="home.php?acao=ver-contas&pg=<?php echo $pg;?>&delete=<?php echo $mostra->id;?>" class="btn btn-danger btn-small" onClick="return confirm('Deseja realmente exluir essa conta?')"><i class="btn-icon-only icon-remove"> </i></a></td>
        </tr> 

<?php }
     
    }else{
        echo '<div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Aviso!</strong> Não há post cadastrado em nosso banco de dados.
        </div>';
    }

}catch(PDOException $e){
    echo $e;
}


  

  ?>

<?php

if($nivelLogado ==0){
  header("Location: home.php");exit;
}

  //excluir
  if(isset($_GET['delete'])){
  $id_delete = $_GET['delete'];


  if($nivelLogado ==1){

  // seleciona a imagem
  $seleciona = "SELECT * from login WHERE id= :id_delete";
  try{
  $result = $conexao->prepare($seleciona);	
  $result->bindParam('id_delete',$id_delete, PDO::PARAM_INT);		
  $result->execute();
  $contar = $result->rowCount();
  if($contar>0){
    $loop = $result->fetchAll();
    foreach ($loop as $exibir){
    }
    
    //$fotoDeleta = $exibir['imagem'];
    //$arquivo = "../upload/postagens/" .$fotoDeleta;
    //unlink($arquivo);
    
    
    // exclui o registo
    $seleciona = "DELETE from login WHERE id=:id_delete";
    try{
      $result = $conexao->prepare($seleciona);
      $result->bindParam('id_delete',$id_delete, PDO::PARAM_INT);				
      $result->execute();
      $contar = $result->rowCount();
      if($contar>0){
        echo '<div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Sucesso!</strong> A conta foi foi excluída!
            </div>';
      }else{
        echo '<div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Erro!</strong> Não foi possível excluir essa conta!
            </div>';	
      }
      
      
      }catch (PDOWException $erro){ echo $erro;}
  }
  
}catch (PDOWException $erro){ echo $erro;}
}else{
echo '<div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Erro!</strong> Seu nível de usuário não permite a exclusão de registro.
            </div>';	
}
  
}

?> 

                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 
          
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->

