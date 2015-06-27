<?php
	include_once ('/xtpl/xtemplate.class.php');
	$template = new XTemplate ("index.htm");
	$template->parse("main");
	$template->out("main");
	