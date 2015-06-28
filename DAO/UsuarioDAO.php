<?php

require_once ("../ConnectionFactory/ConnectionFactory.php");

class UsuarioDAO{
	private $con = null;
	public function __construct(){
		$this->con = ConnectionFactory::getConnection();
	}
	
	public function validaLogin ($login,$senha){
		$query = "select idUsuario, nomeUsuario from usuario where loginUsuario='".$login."' and senhaUsuario='".$senha."'";
		$result = $this->con->query($query);
		if ($result->num_rows!=0){
			
			$saida = $result->fetch_assoc();
			$array = array("nomeUsuario"=> $saida['nomeUsuario'], "idUsuario" => $saida["idUsuario"]); 
			return $array;
		}
		return null;
	}
}