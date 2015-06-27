<?php
require_once ("Receita.class.php");
class Igrediente{
	private $idIgrediente = 0;
	private $fkReceita = null;
	private $nomeIgrediente = "";
	private $seqIgrediente = 0;
	private $medidaIgrediente = "";
	private $qtdIgrediente = 0.0;
	
	public function __contruct (){
		$this->idIgrediente = 0;
		$this->fkReceita = new Receita();
		$this->nomeIgrediente = "";
		$this->seqIgrediente = 0;
		$this->medidaIgrediente = "";
		$this->qtdIgrediente = 0.0;
	}
	
	public function getIdIgrediente (){
		return $this->idIgrediente;
	}
	public function getFkReceita (){
		return $this->fkReceita;
	}
	public function getNomeIgrediente (){
		return $this->nomeIgrediente;
	}
	public function getSeqIgrediente (){
		return $this->seqIgrediente;
	}
	public function getMedidaIgrediente (){
		return $this->medidaIgrediente;
	}
	public function getQtdIgrediente (){
		return $this->qtdIgrediente;
	}
	public function setIdIgrediente ($int){
		$this->idIgrediente = $int;
	}
	public function setFkReceita ($receita){
		$this->fkReceita = $receita;
	}
	public function setNomeIgrediente ($string){
		$this->nomeIgrediente = $string;
	}
	public function setSeqIgrediente ($int){
		$this->seqIgrediente = $int;
	}
	public function setMedidaIgrediente ($string){
		$this->medidaIgrediente = $string;
	}
	public function setQtdIgrediente ($decimal){
		$this->qtdIgrediente = $decimal;
	}
}