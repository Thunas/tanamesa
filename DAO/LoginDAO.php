<?php

require_once ("../ConnectionFactory/ConnectionFactory.php");

class LoginDAO{
	private $con = null;
	public function __construct(){
		$this->con = ConnectionFactory::getConnection();
	}
	
	public function validaLogin ($nome,$senha){
		$query = "select nomeUsuario from usuario where nomeUsuario='".$nome."' and senhaUsuario='".$senha."'";
		$result = $this->con->query($query);
		$saida = $result->fetch_assoc();
		return $saida['nomeUsuario'];
	}
}