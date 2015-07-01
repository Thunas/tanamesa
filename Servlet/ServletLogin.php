<html>
	<head>
			<?php
				require_once ("../DAO/UsuarioDAO.php");
				require_once ("../Model/Usuario.class.php");
				$login = $_POST["Login"];
				$senha = $_POST["Senha"];
				session_start();
				session_destroy();
				session_start();
				$loginDAO = new UsuarioDAO();
				$array = $loginDAO->validaLogin($login, $senha);
				if ($array!=null){
					$usuario = new Usuario();
					$usuario->setIdUsuario($array["idUsuario"]);
					$usuario->setNomeUsuario($array["nomeUsuario"]);
					$_SESSION["usuario"] = $usuario;
				}else{
					$_SESSION["erro"] = true;
				}
				echo ("<script>javascript:history.go(-1)</script>");
			?>
	</head>
	<body>
	</body>
</html>