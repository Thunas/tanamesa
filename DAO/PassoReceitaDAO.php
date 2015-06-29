<?php
require_once ("../ConnectionFactory/ConnectionFactory.php");
require_once ("../Model/PassoReceita.class.php");
class PassoReceitaDAO{
	private $con = null;
	public function __construct() {
		$this->con = ConnectionFactory::getConnection();
	}
	
	public function getNumPassos($idReceita) {
		$query = "SELECT count(idPassoReceita) numPassos FROM passoreceita where fkReceita = ".$idReceita.";";
		$result = $this->con->query($query);
		$linha = $result->fetch_assoc();
		return $linha["numPassos"];
	}
	
	public function getPassos ($idReceita){
		$query = "SELECT tipoPasso, tempoPasso, descricaoPasso FROM passoreceita where fkReceita = ".$idReceita." ORDER BY seqPasso;";
		$result = $this->con->query($query);
		$arrayPassos = array();
		while ($linha = $result->fetch_assoc ()){
			$passoReceita = new PassoReceita();
			
			$passoReceita->setDescricaoPasso($linha["descricaoPasso"]);
			$passoReceita->setTempoPasso(new DateTime($linha["tempoPasso"]));
			$passoReceita->setTipoPasso($linha["tipoPasso"]);
			array_push($arrayPassos, $passoReceita);
		}
		return $arrayPassos;
	}
}