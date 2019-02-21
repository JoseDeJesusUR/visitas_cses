<?php 

    session_start();

if( isset(  $_SESSION["ses_identificado"])){
    echo "BIENVENIDO: " . ($_SESSION["ses_nombre"] );
	}else{
    	header("Location:formulario.php?sesion=456");
    	exit();
	}	
?>
