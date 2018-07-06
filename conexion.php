<?php
	
	function conectar(){

		$serverName = "DESKTOP-P943VI0"; //serverName\instanceName
		$connectionInfo = array( "Database"=>"ProyectoInventarios", "UID"=>"pepe3", "PWD"=>"123");
		$conn = sqlsrv_connect( $serverName, $connectionInfo);

		return $conn;
	}

?>