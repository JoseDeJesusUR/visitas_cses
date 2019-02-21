<?php 

    session_start();

if( isset(  $_SESSION["ses_identificado"])){
    echo "BIENVENIDO: " . $_SESSION["ses_nombre"] ."<br>". $_SESSION["ses_cargo"];
	}else{
    	header("Location:index.php?sesion=456");
    	exit();
	}	
?>
