<?php
require_once ("../ConnectionFactory/ConnectionFactory.php");
require_once ("../Model/Igrediente.class.php");
class IgredienteDAO{
	private $con = null;
	public function __construct() {
		$this->con = ConnectionFactory::getConnection ();
		;
	}
	
	public function getIgredientes ($idReceita){
		$query = "select nomeIgrediente, qtdIgrediente, medidaIgrediente from Igrediente where fkReceita=".$idReceita." ORDER BY seqIgrediente";
		$result = $this->con->query($query);
		$arrayIgredientes = array();
		
		for ($i=0;$i<$result->num_rows;++$i){
			$linha = $result->fetch_assoc();
			$igrediente = new Igrediente();
			
			$igrediente->setNomeIgrediente($linha["nomeIgrediente"]);
			$igrediente->setQtdIgrediente($linha["qtdIgrediente"]);
			$igrediente->setMedidaIgrediente($linha["medidaIgrediente"]);
			
			array_push($arrayIgredientes, $igrediente);
		}
		return $arrayIgredientes;
	}
	
}