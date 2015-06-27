<?php

	require_once ('/xtpl/xtemplate.class.php');
	
	$template = new XTemplate ('index.htm');
	$template->assign ("nome","arthur");
	$template->parse("main.CampoNome");
	$template->parse("main.CampoNome");

	$template->parse('main');
	$template->out('main');