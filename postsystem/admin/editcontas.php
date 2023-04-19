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
	      				<h3>Editar conta de administrador</h3>
	  				</div> <!-- /widget-header -->
                     			
	      			<div class="widget-content">	      				
			      		
                        <?php
//RECUPERA OS DADOS
if(!isset($_GET['id'])){ header("Location: home.php?acao=ver-contas"); exit;}
$id = $_GET['id'];
$select = "SELECT * from login WHERE id=:id";
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
					$email = $mostra->email;
					$usuario = $mostra->usuario;
					$senha = $mostra->senha;
					$nivel = $mostra->nivel;	
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
			$email	 	= $_POST['email']; 
			$usuario  = $_POST['usuario'];
			$senha =  $_POST['senha'];
			$nivel =   $_POST['nivel'];
		
			$update = "UPDATE login SET nome=:nome, email=:email, usuario=:usuario, senha=:senha, nivel=:nivel WHERE id=:id";
			
		
		try{
			$result = $conexao->prepare($update);
			$result->bindParam(':id', $id, PDO::PARAM_INT);
			$result->bindParam(':nome', $nome, PDO::PARAM_STR);
			$result->bindParam(':email', $email, PDO::PARAM_STR);
			$result->bindParam(':usuario', $usuario, PDO::PARAM_STR);
			$result->bindParam(':senha', $senha, PDO::PARAM_STR);
			$result->bindParam(':nivel', $nivel, PDO::PARAM_STR);
			$result->execute();
			$contar = $result->rowCount();
			if($contar>0){
				echo '<div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Sucesso!</strong> A conta foi atualizada.
                </div>';
			}else{
				echo '<div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Erro ao cadastrar!</strong> Não foi possível atualizar a conta.
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
											<label class="control-label" for="firstname">Usuário</label>
											<div class="controls">
												<input type="text" class="span2" id="usuario" value="<?php echo $usuario;?>" name="usuario">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="email">Email</label>
											<div class="controls">
												<input type="text" class="span2" name="email" id="email" value="<?php echo $email;?>" rows="10">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
                                        

										<div class="control-group">											
											<label class="control-label" for="firstname">Senha</label>
											<div class="controls">
												<input type="text" class="span2" id="senha" value="<?php echo $senha;?>" name="senha">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="firstname">Nível  </label>
											<div class="controls">
											  <select class="span2" id="nivel"  name="nivel">
                                                 <option>0</option>
                                                 <option>1</option>
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