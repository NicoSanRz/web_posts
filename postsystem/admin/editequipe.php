<script type="text/javascript">
jQuery(function($){
   $("#date").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
});
</script>
<div class="main">
  <div class="main-inner">
    <div class="container">
     <div class="row">
     	  
            <div class="span12">	      		
	      		<div id="target-1" class="widget">	 
                
                <div class="widget-header">
	      				<i class="icon-file"></i>
	      				<h3>Editar Equipe</h3>
	  				</div> <!-- /widget-header -->
                     			
	      			<div class="widget-content">	      				
			      		
                        <?php
//RECUPERA OS DADOS
if(!isset($_GET['id'])){ header("Location: home.php?acao=ver-equipe"); exit;}
$id = $_GET['id'];
$select = "SELECT * from tb_equipe WHERE id=:id";
$contagem =1;
		
		try{
			$result = $conexao->prepare($select);
			$result->bindParam(':id', $id, PDO::PARAM_INT);			
			$result->execute();
			$contar = $result->rowCount();
			if($contar>0){
				while($mostra = $result->FETCH(PDO::FETCH_OBJ)){
					$idPost = $mostra->id;
					$nome = $mostra->nome;
					$descricao = $mostra->descricao;
					$cargo = $mostra->cargo;	
				}				
			}else{
				echo '<div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Aviso!</strong> Não há dados cadastrados com o id informado.
                </div>';exit;
			}
			
		}catch(PDOException $e){
			echo $e;
		}				
						
		// ATUALIZAR				
	  	if(isset($_POST['atualizar'])){
			$nome 		= trim(strip_tags($_POST['nome']));
			$descricao	 	= $_POST['descricao'];        
		
			$update = "UPDATE tb_equipe SET nome=:nome, descricao=:descricao, cargo=:cargo WHERE id=:id";
			
		
		try{
			$result = $conexao->prepare($update);
			$result->bindParam(':id', $id, PDO::PARAM_INT);
			$result->bindParam(':nome', $nome, PDO::PARAM_STR);
			$result->bindParam(':descricao', $descricao, PDO::PARAM_STR);
			$result->bindParam(':cargo', $cargo, PDO::PARAM_STR);
			$result->execute();
			$contar = $result->rowCount();
			if($contar>0){
				echo '<div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Sucesso!</strong>
                </div>';
			}else{
				echo '<div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Erro ao editar!</strong>
                </div>';
			}			
		}catch(PDOException $e){
			echo $e;
		}

			
		}
	 
	 
	 ?>
     	
                        <div class="tab-pane" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								
										
										<div class="control-group">											
											<label class="control-label" for="username">Nome</label>
											<div class="controls">
												<input type="text" class="span6 disabled" id="nome" value="<?php echo $nome;?>" name="nome">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										
										
										<div class="control-group">											
											<label class="control-label" for="email">Descrição</label>
											<div class="controls">
												<textarea class="span8" name="descricao" id="descricao" value="" rows="10"><?php echo $descricao;?></textarea>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
                                        
										<div class="control-group">											
											<label class="control-label" for="firstname">Cargo</label>
											<div class="controls">
											  <select class="span2" id="cargo"  name="cargo">
                                                 <option>Docentes da UFSM</option>
                                                 <option>Estudantes de Pós-graduação</option>
												 <option>Bolsistas</option>
												 <option>Participantes externos</option>
                                              </select>	
				                            </div>		
										</div> <!-- /control-group -->
                        
                        
                        				<div class="form-actions">
											<input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar">
											<input type="reset" class="btn" value="Cancelar">
										</div> <!-- /form-actions -->
                  				</form>
                        
                        
                        
		      		</div> <!-- /widget-content -->
	      		</div> <!-- /widget -->
      		</div><!-- span 12 -->
            
            
    </div><!-- row -->        
     
      
          
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
<script type="text/javascript" src="editor/nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>