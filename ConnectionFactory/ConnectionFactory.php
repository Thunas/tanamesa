<?php
class ConnectionFactory{
	private static $con = null;
	
	public function getConnection (){
		$con = new mysqli("localhost","root","","tanamesa");
		return $con;
	}
	public function closeConnection (){
		$con->close();
	}
}