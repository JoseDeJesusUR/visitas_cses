<?php 
  $com=$_POST["txtcomentarios"];
  $id=$_POST["txtid"];

    include("../conexion.php"); 

  $consulta = "UPDATE visita SET 

    comen='$com' 

  WHERE id=$id";
  
    echo "consulta: " . $consulta;

        $query = $bd->prepare($consulta);
        $query->execute();

    header("Location:busc_usu.php");
?>