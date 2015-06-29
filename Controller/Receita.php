<?php
	require_once ("../Model/Usuario.class.php");
	require_once ("../xtpl/xtemplate.class.php");
	require_once ("../DAO/ReceitaDAO.php");
	require_once ("../Model/Igrediente.class.php");
	require_once ("../DAO/IgredienteDAO.php");
	require_once ("../DAO/PassoReceitaDAO.php");
	require_once ("../Model/PassoReceita.class.php");
	
	session_start();
	
	$receitaDAO = new ReceitaDAO();
	$template = null;
	if (isset($_GET["Receita"])){
		if (isset($_SESSION["usuario"]) || $receitaDAO->getAcessoReceita($_GET["Receita"]) == true){
			$template = new XTemplate("../View/Receita.htm");
		}else{
			$template = new XTemplate ("../View/ImpossivelAcessarReceita.htm");
		}
	}else{
		$template = new XTemplate ("../View/ErroAcessarReceita.htm");
	}
	
	if (isset($_SESSION["erro"])){
		unset($_SESSION["erro"]);
		$template->parse("main.erro");
		$template->parse("main.logar");
	}else{
		if(isset($_SESSION["usuario"])){
			$template->assign("nomeUsuario",$_SESSION["usuario"]->getNomeUsuario());
			$template->parse ("main.usuario");
		}else{
			$template->parse("main.logar");
		}
	}
	
	if (isset($_GET["Receita"])){
		if (isset($_SESSION["usuario"]) || $receitaDAO->getAcessoReceita($_GET["Receita"]) == true){
			//trabalhar com a Receita.htm
			
			$passoReceitaDAO = new PassoReceitaDAO();
			$template->assign ("maxPasso",$passoReceitaDAO->getNumPassos($_GET["Receita"]));
			$template->parse("main.controlador");
			
			$igredienteDAO = new IgredienteDAO();
			$arrayIgrediente = $igredienteDAO->getIgredientes($_GET["Receita"]);
			for ($i=0;$i<count($arrayIgrediente);++$i){
				$template->assign("nomeIgrediente",$arrayIgrediente[$i]->getNomeIgrediente ());
				$template->assign("qtdigrediente",$arrayIgrediente[$i]->getQtdIgrediente ());
				$template->assign("medidaIgrediente",$arrayIgrediente[$i]->getMedidaIgrediente());
				$template->parse("main.igredientes.igrediente");
			}
			$template->parse("main.igredientes");
			
			$arrayPassos = $passoReceitaDAO->getPassos($_GET["Receita"]);
			
		}
	}
	
	$template->parse("main");
	$template->out("main");