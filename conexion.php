<?php
$host = "localhost";
$basededatos = "prop_acom";
$usuario = "root";
$password = "rootroot";
$puerto = "3306";

try{ 
    $bd= new PDO("mysql:host=".$host.";dbname=".$basededatos.";port=".$puerto, $usuario, $password);    
    $bd-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);    
	}catch(PDOException $e){    
    	echo "<br>Ocurrio un error ->" . 
        	$e->getMessage();
	}
?>