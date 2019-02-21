<?php 
  $tit=$_POST["txttitulo"];
  $dat=$_POST["txtdatos"];
  $nece=$_POST["txtnecesidades"];
  $acu=$_POST["txtacuerdos"];
  $id=$_POST["txtid"];

    include("conexion.php"); 

      $consulta = "UPDATE visita SET 
            
        titulo='$tit',
        txt_datos='$dat',
	      txt_necesidades='$nece',
	      txt_acuerdos='$acu' 

  WHERE id=$id";

      echo "consulta: " . $consulta;

        $query = $bd->prepare($consulta);
        $query->execute();

    header("Location:sistema.php");
?>