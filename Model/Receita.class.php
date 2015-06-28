<?php
class Receita{
	private $idReceita = 0;
	private $nomeReceita = "";
	private $descricaoReceita = "";
	private $dificuldadeReceita = "";
	private $publicaReceita = false;
	
	public function __construct(){
		$this->idReceita = 0;
		$this->nomeReceita = "";
		$this->descricaoReceita = "";
		$this->dificuldadeReceita = "";
		$this->publicaReceita = false;
	}
	
	public function getIdReceita (){
		return $this->idReceita;
	}
	public function getNomeReceita (){
		return $this->nomeReceita;
	}
	public function getDescricaoReceita (){
		return $this->descricaoReceita;
	}
	public function getDificuldadeReceita (){
		return $this->dificuldadeReceita;
	}
	public function getPublicaReceita (){
		return $this->publicaReceita;
	}
	public function setIdReceita ($int){
		$this->idReceita = $int;
	}
	public function setNomeReceita ($string){
		$this->nomeReceita = $string;
	}
	public function setDescricaoReceita ($string){
		$this->descricaoReceita = $string;
	}
	public function setDificuldadeReceita ($string){
		$this->dificuldadeReceita = $string;
	}
	public function setPublicaReceita ($bool){
		$this->publicaReceita = $bool;
	}
}