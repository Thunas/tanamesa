<?php
require_once("../ConnectionFactory/ConnectionFactory.php");
require_once ("../Model/Receita.class.php");
class ReceitaDAO{
	private $con = null;
	public function __construct(){
		$this->con = ConnectionFactory::getConnection();
	}
	
	public function getReceitas ($nome, $inicio=0){
		if ($nome != ""){
			$query = "select idReceita, nomeReceita, descricaoReceita, dificuldadeReceita from Receita where nomeReceita like '%".$nome."%' or descricaoReceita like '%".$nome."%' LIMIT ".$inicio.",20";
		}else{
			$query = "select * from (select idReceita, nomeReceita, descricaoReceita, dificuldadeReceita from Receita ORDER BY rand() LIMIT 0,2) rec ORDER BY nomeReceita;";
		}
		$result = $this->con->query($query);
		$array = array();
		for ($i=0;$i<$result->num_rows;++$i){
			$linha=$result->fetch_assoc();
			$receita = new Receita ();
			$receita->setIdReceita($linha["idReceita"]);
			$receita->setNomeReceita($linha["nomeReceita"]);
			$receita->setDescricaoReceita($linha["descricaoReceita"]);
			$receita->setDificuldadeReceita($linha["dificuldadeReceita"]);
			array_push($array,$receita);
		}
		return $array;
	}
	
	public function getAcessoReceita ($idReceita){
		$query = "select publicaReceita from Receita where idReceita='".$idReceita."'";
		$result = $this->con->query($query);
		$linha = $result->fetch_assoc();
		return $linha["publicaReceita"];
	}
}