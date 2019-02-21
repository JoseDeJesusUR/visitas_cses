<?php 
  $accion=$_POST["txtacciones"];
  $resul=$_POST["txtresul"];

  $id=$_POST["txtid"];

    include("conexion.php"); 

      $consulta = "UPDATE visita SET 
            
	      txt_acciones='$accion',
	      txt_resul='$resul' 

  WHERE id=$id";

      echo "consulta: " . $consulta;

        $query = $bd->prepare($consulta);
        $query->execute();

    header("Location:sistema.php");
?>