<?php
class ConnectionFactory{
	private static $con = null;
	
	public static function getConnection (){
		$con = new mysqli("localhost","root","","tanamesa");
		return $con;
	}
	public static function closeConnection (){
		$con->close();
	}
}