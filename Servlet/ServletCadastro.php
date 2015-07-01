<?php
	require_once ("../DAO/UsuarioDAO.php");
	require_once ("../Model/Usuario.class.php");
	if (isset($_POST["Nome"]) && isset($_POST["SobreNome"]) && isset($_POST["Login"]) && isset($_POST["Senha"]) && isset($_POST["Email"])){
		$nome = $_POST["Nome"];
		$sobrenome = $_POST["SobreNome"];
		$login = $_POST["Login"];
		$senha = $_POST["Senha"];
		$email = $_POST["Email"];
		$usuarioDAO = new UsuarioDAO();
		$usuario = new Usuario();
		
		$usuario->setEmailUsuario($email);
		$usuario->setLoginUsuario($login);
		$usuario->setNomeUsuario($nome);
		$usuario->setSenhaUsuario($senha);
		$usuario->setSobreNomeUsuario($sobrenome);
		
		$resultado = $usuarioDAO->cadastroUsuario($usuario);
		if ($resultado == false){
			header ("Location: ../View/ErroCadastrar.html");
		}else{
			header("Location: ../Controller/Buscar.php");
		}
	}