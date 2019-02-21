
<?php
	$mysqli = new mysqli("localhost","root","rootroot","prop_acom"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>