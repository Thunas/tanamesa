<?php
	require_once ("../xtpl/xtemplate.class.php");
	require_once ("../DAO/ReceitaDAO.php");
	require_once ("../Model/Usuario.class.php");
	$template = new XTemplate ("../View/Buscar.htm");
	
	session_start();
	if (isset($_SESSION["erro"])){
		unset($_SESSION["erro"]);
		$template->parse("main.logar.erro");
		$template->parse("main.logar");
	}else{
		if(isset($_SESSION["usuario"])){
			$template->assign("nomeUsuario",$_SESSION["usuario"]->getNomeUsuario());
			$template->parse ("main.usuario");
		}else{
			$template->parse ("main.logar");
		}
	}
	
	$receitaDAO = new ReceitaDAO();
	if (isset($_GET["CampoBusca"])){
		$arrayReceitas = $receitaDAO->getReceitas($_GET["CampoBusca"]);
	}else{
		$arrayReceitas = $receitaDAO->getReceitas ();
	}
	for ($i=0;$i<count($arrayReceitas);++$i){
		$template->assign("idReceita",$arrayReceitas[$i]->getIdReceita());
		$template->assign("nomeReceita",$arrayReceitas[$i]->getNomeReceita());
		$template->assign("descricaoReceita",$arrayReceitas[$i]->getDescricaoReceita());
		$template->assign("dificuldadeReceita",$arrayReceitas[$i]->getDificuldadeReceita());
		$template->parse("main.resultado");
	}
	$template->parse("main");
	$template->out("main");