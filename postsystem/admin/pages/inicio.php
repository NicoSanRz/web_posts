
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
                      <strong>Olá, '.$nomeLogado.'!</strong> Seja Bem vindo(a) ao <strong>Painel de Gerenciamento da OVAN</strong> !
               </div>';
					}
				}
			 ?>  
      		</div>
            
            
            <div class="span12">	      		
	      		<div id="target-1" class="widget">	      			
	      			<div class="widget-content">	      				
			      		<h1>OVAN- Painel</h1>			      		
			      		<p>Painel de gerenciamento de Postagens e Notícias do OVAN(Observatório de Vigilância Alimentar)
                   feito para criar, editar, visualizar e deletar postagens, notícias ou destaques!
                </p>
                        
		      		</div> <!-- /widget-content -->
	      		</div> <!-- /widget -->
      		</div><!-- span 12 -->
            
            
    </div><!-- row -->  
    
    
   
<?php
	//excluir
	if(isset($_GET['delete'])){
		$id_delete = $_GET['delete'];
		
		// seleciona a imagem
		$seleciona = "SELECT * from tb_postagens WHERE id= :id_delete";
		try{
			$result = $conexao->prepare($seleciona);	
			$result->bindParam('id_delete',$id_delete, PDO::PARAM_INT);		
			$result->execute();
			$contar = $result->rowCount();
			if($contar>0){
				$loop = $result->fetchAll();
				foreach ($loop as $exibir){
				}
				
				$fotoDeleta = $exibir['imagem'];
				$arquivo = "../upload/postagens/" .$fotoDeleta;
				unlink($arquivo);
				
				
				// exclui o registo
				$seleciona = "DELETE from tb_postagens WHERE id=:id_delete";
				try{
					$result = $conexao->prepare($seleciona);
					$result->bindParam('id_delete',$id_delete, PDO::PARAM_INT);				
					$result->execute();
					$contar = $result->rowCount();
					if($contar>0){
						echo '<div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Sucesso!</strong> O post foi excluído.
                </div>';
					}else{
						echo '<div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Erro!</strong> Não foi possível excluir o post.
                </div>';	
					}				
					
					}catch (PDOWException $erro){ echo $erro;}			}			
		}catch (PDOWException $erro){ echo $erro;}
			
	}

?> 

           
     
        
          <!--<div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Últimos Posts</h3>
            </div>
            <div class="widget-content">-->
              <section class="sec_sobre row justify-content-center">
                <h4 class="titulo_sobr">Sistema de Vigilância Alimentar e Nutricional</h4>
                <article class="sobre_equipe">
                  <br>
                  <p class="sobre_text">O Observatório de Vigilância Alimentar e Nutricional (OVAN) é o resultado de um  
                  <br>nutricionistas vinculados a Universidade Federal de Santa Maria, Universidade Federal do Pampa, Universidade de Passo Fundo, Universidade Regional do 
                  <br>Noroeste do Estado do Rio Grande do Sul, Secretaria do Estado do Rio Grande do Sul e Coordenadorias Regionais de Saúde do Rio Grande do Sul.
                  <br></p>
      
                  <p class="sobre_text">O OVAN está vinculado ao projeto matricial intitulado “Qualificação da Vigilância Alimentar e Nutricional: uma proposta de educação permanente para 
                  <br>melhoria da qualidade da atenção à saúde nos municípios do RS” com apoio financeiro da Fundação de Amparo à Pesquisa do Estado do Rio Grande do Sul. 
                  <br>O OVAN possui objetivo em fortalecer a organização e operacionalização da Vigilância Alimentar e Nutricional (VAN). <br></p>
      
                  <p class="sobre_text">Configura-se como um espaço para ampliar reflexões e promover o diálogo sobre a prática entre profissionais, além de ser um instrumento de apoio aos 
                  <br>atores da VAN por meio do compartilhamento de experiências, contribuindo para o conhecimento científico e na tomada de decisões para formulação ou 
                  <br>reorientação de políticas públicas.</p>
      
                  <p class="sobre_text">O OVAN possui a finalidade também de facilitar o acesso aos conteúdos relacionados à VAN e de contribuir para a melhoria da cobertura do estado nutricional 
                  <br>e de consumo alimentar nos diferentes ciclos da vida e atuar como instrumento para fortalecer a gestão de dados e a utilização de todas as fases do Ciclo de 
                  <br>Gestão e Produção do Cuidado. <br></p>
                </article>
              </section>
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