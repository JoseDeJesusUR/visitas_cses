<?php 
    session_start(); 
    include("sesion.php");
//______________session________________________
    $id_usu=$_SESSION["ses_id"];

    $nombre_usu=$_SESSION["ses_nombre"];

    $do_result=$_SESSION['dook'];
    $ze_result=$_SESSION['zeok'];

    $nombre_result=$_SESSION['nombreok'];
    $cct_result=$_SESSION['ctok'];
    $turno_result=$_SESSION['turnook'];
    $domicilio_result=$_SESSION['domiciliook'];
    $telefonos_result=$_SESSION['telefonosok']; 
    $director_result=$_SESSION['directorok'];
    $correo_result=$_SESSION['correook'];

    $tit=$_POST["txttitle"];
    $dato=$_POST["txtdatos"];
    $nece=$_POST["txtnecesidades"];
    $acu=$_POST["txtacuerdos"];
//_____________________________________________
    include("conexion.php"); 

    $consulta = "INSERT INTO visita(
usuario,

nom_usu,

do,
ze,

	nombre_esc,
	cct_esc,
	turno_esc,
	domicilio,
	telefonos,
	director,
	mail,

	titulo,
	txt_datos,
	txt_necesidades,
	txt_acuerdos) 

	VALUES(
            '$id_usu',

            '$nombre_usu',

            '$do_result',
            '$ze_result',

			'$nombre_result',
			'$cct_result',
			'$turno_result',
			'$domicilio_result',
			'$telefonos_result',
			'$director_result',
			'$correo_result',

			'$tit',
			'$dato',
			'$nece', 
			'$acu')";

		echo "consulta: " . $consulta;

$query = $bd->prepare($consulta);
$query->execute();

header("Location:menu.php");
?>