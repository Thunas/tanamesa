<?php
require_once ('Receita.class.php');
class PassoReceita {
	private $idPassoReceita = 0;
	private $fkReceita = null;
	private $seqPasso = 0;
	private $tipoPasso = false;
	private $tempoPasso = null;
	private $descricaoPasso = "";
	
	public function __construct(){
		$this->idPassoReceita = 0;
		$this->fkReceita = new Receita();
		$this->seqPasso = 0;
		$this->tipoPasso = false;
		$this->tempoPasso = new DateTime('0-0-0 0:0:0');
		$this->descricaoPasso = "";
	}
	
	public function getIdPassoReceita (){
		return $this->idPassoReceita;
	}
	public function getfkReceita (){
		return $this->fkReceita;
	}
	public function getSeqPasso (){
		return $this->seqPasso;
	}
	public function getTipoPasso (){
		return $this->tipoPasso;
	}
	public function getTempoPasso (){
		return $this->tempoPasso;
	}
	public function getDescricaoPasso (){
		return $this->descricaoPasso;
	}
	public function setIdPassoReceita($int) {
		$this->idPassoReceita = $int;
	}
	public function setFkReceita($receita) {
		$this->fkReceita = $receita;
	}
	public function setSeqPasso($int) {
		$this->seqPasso = $int;
	}
	public function setTipoPasso($string) {
		$this->tipoPasso = $string;
	}
	public function setTempoPasso($datetime) {
		$this->tempoPasso = $datetime;
	}
	public function setDescricaoPasso($string) {
		$this->descricaoPasso = $string;
	}
}