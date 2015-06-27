<?php
	include_once ('/xtpl/xtemplate.class.php');
	require_once ('/Model/Usuario.class.php');
	$template = new XTemplate ("index.htm");
	session_start();
	if (isset($_SESSION["erro"])){
		$template->parse("main.erro");
		$template->parse("main.logar");
	}else{
		if(isset($_SESSION["usuario"])){
			$template->assign("nomeUsuario",$_SESSION["usuario"]->getNomeUsuario());
			$template->parse ("main.usuario");
		}else{
			$template->parse ("main.logar");
		}
	}
	$template->parse("main");
	$template->out("main");
	