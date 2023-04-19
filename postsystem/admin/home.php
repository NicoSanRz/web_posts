<?php include("includes/header.php");?>
</head>
<body>
<?php include("includes/topo.php");?>



<?php
	if(isset($_GET['acao'])){
		$acao = $_GET['acao'];	
		
		if($acao=='welcome'){include("pages/inicio.php");}	
		
		// cadastro
		if($acao=='cad-postagem'){include("pages/cad-postagem.php");}
		if($acao=='cad-conta'){include("registro.php");}
		if($acao=='cad-biblio'){include("cadbiblio.php");}
		if($acao=='cad-equipe'){include("cadequipe.php");}	
		if($acao=='cad-port'){include("cadport.php");}
		if($acao=='cad-pesquisa'){include("cadpesquisa.php");}
		if($acao=='cad-eventos'){include("cadeventos.php");}
		if($acao=='cad-cursos'){include("cadcursos.php");}
		if($acao=='cad-web'){include("cadwebnarios.php");}
		if($acao=='cad-coberturas'){include("cadcoberturas.php");}
		if($acao=='cad-relatos'){include("cadrelatos.php");}
		
		// exibicao
		if($acao=='ver-postagens'){include("pages/ver-postagens.php");}
		if($acao=='ver-contas'){include("listacontas.php");}
		if($acao=='ver-biblio'){include("mostrabiblio.php");}
		if($acao=='ver-equipe'){include("verequipe.php");}
		if($acao=='ver-port'){include("verport.php");}
		if($acao=='ver-pesquisa'){include("verpesquisa.php");}
		if($acao=='ver-eventos'){include("vereventos.php");}
		if($acao=='ver-cursos'){include("vercursos.php");}
		if($acao=='ver-web'){include("verwebnarios.php");}
		if($acao=='ver-coberturas'){include("vercoberturas.php");}
		if($acao=='ver-relatos'){include("verrelatos.php");}
		
		// edicao
		if($acao=='editar-postagem'){include("pages/edt-postagem.php");}
		if($acao=='editar-biblio'){include("edt-biblio.php");}
		if($acao=='editar-pesquisa'){include("editpesquisa.php");}
		if($acao=='editar-eventos'){include("editeventos.php");}
		if($acao=='editar-cursos'){include("editcursos.php");}
		if($acao=='editar-web'){include("editwebnarios.php");}
		if($acao=='editar-relatos'){include("editrelatos.php");}
		if($acao=='editar-contas'){include("editcontas.php");}
		if($acao=='editar-equipe'){include("editequipe.php");}
		if($acao=='editar-port'){include("editport.php");}
		if($acao=='editar-coberturas'){include("editcoberturas.php");}
		
	}else{
		include("pages/inicio.php");
	}

?>




<?php include("includes/footer.php");?>
</body>
</html>
