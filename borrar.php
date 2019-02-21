<?php 
    
    $idx = $_GET["idx"];
    include("conexion.php");

$consulta = "DELETE FROM visita WHERE id=$idx";
echo $consulta;
$query = $bd->prepare($consulta);
$query->execute();

//-------
header("Location: sistema.php");

?>