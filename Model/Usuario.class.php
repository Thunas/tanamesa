<?php
class Usuario {
	private $idUsuario = 0;
	private $nomeUsuario = "";
	private $sobreNomeUsuario = "";
	private $loginUsuario = "";
	private $senhaUsuario = "";
	private $emailUsuario = "";
	
	public function __construct (){
		$this->idUsuario = 0;
		$this->nomeUsuario = "";
		$this->sobreNomeUsuario = "";
		$this->loginUsuario = "";
		$this->senhaUsuario = "";
		$this->emailUsuario = "";
	}
	
	public function getIdUsuario (){
		return $this->idUsuario;
	}
	public function getNomeUsuario (){
		return $this->nomeUsuario;
	}
	public function getSobreNomeUsuario (){
		return $this->sobreNomeUsuario;
	}
	public function getLoginUsuario (){
		return $this->loginUsuario;
	}
	public function getSenhaUsuario (){
		return $this->senhaUsuario;
	}
	public function getEmailUsuario (){
		return $this->emailUsuario;
	}
	public function setIdUsuario ($int){
		$this->idUsuario = $int;
	}
	public function setNomeUsuario ($string){
		$this->nomeUsuario = $string;
	}
	public function setSobreNomeUsuario ($string){
		$this->sobreNomeUsuario = $string;
	}
	public function setLoginUsuario ($string){
		$this->loginUsuario = $string;
	}
	public function setSenhaUsuario ($string){
		$this->senhaUsuario = $string;
	}
	public function setEmailUsuario ($string){
		$this->emailUsuario = $string;
	}
}