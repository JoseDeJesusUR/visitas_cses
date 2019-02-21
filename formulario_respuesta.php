<?php
    $us = $_POST["txtus"];
    $ps = $_POST["txtpass"];

    echo "tu usuario: " . $us;
    echo "<br>";
    echo "tu pass: " . $ps;

include("conexion.php");
$consulta = "SELECT * FROM _usulogin WHERE usuario='$us' AND pass = '$ps'";
        echo "<br>" . $consulta;

$query = $bd->prepare($consulta);
$query->execute();
$rs = $query->fetchAll();

$filas = count($rs);
echo "<br> filas: " . $filas;
//----------
if($filas==1){
   echo "BIENVENIDO ";     
    //-----sesion:
    session_start();
    $_SESSION["ses_id"] = $rs[0]["id"];
    $_SESSION["ses_identificado"] = "si";

    $_SESSION["ses_nombre"] = $rs[0]["nombre"];
    $_SESSION["ses_usuario"] = $rs[0]["usuario"];
    $_SESSION["ses_pass"] = $rs[0]["pass"];
    $_SESSION["ses_cargo"] = $rs[0]["cargo"];
          
   header("Location: menu.php"); 
}else{
   echo "INVALIDO" ;
    header("Location: index.php?error=123");
}

?>