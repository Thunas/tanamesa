<html>
	<head>
			<?php
				require_once ("../DAO/LoginDAO.php");
				require_once ("../Model/Usuario.class.php");
				$login = $_POST["Login"];
				$senha = $_POST["Senha"];
				session_start();
				session_destroy();
				session_start();
				$loginDAO = new LoginDAO();
				$array = $loginDAO->validaLogin($login, $senha);
				if ($array!=null){
					$usuario = new Usuario();
					$usuario->setIdUsuario($array["idUsuario"]);
					$usuario->setNomeUsuario($array["nomeUsuario"]);
					$_SESSION["usuario"] = $usuario;
					print_r ($_SESSION["usuario"]);
				}else{
					$_SESSION["erro"] = true;
				}
				header("Location: ../");
			?>
	</head>
	<body>
	</body>
</html>