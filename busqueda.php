<!DOCTYPE html>
<html>
  <head>
      <meta charset="utfv-8">
      <meta name="viewport" content="width=divice-width, initial-scale=1, maximum-scale=1">
      <link rel="stylesheet" type="text/css" href="css/normalize.css">
      <script src="css/modernizr-custom.js"></script>
        <title>BUSQUEDA</title>
            <link rel="stylesheet" type="text/css" href="css/normalize.css">
            <link rel="shortcut icon" href="Complementos/Icon.png" type="image/x-icon">
    <style type="text/css">
      .myTable{
        width: 100%;
        border-collapse:collapse;
      }  
      .myTable td{
        padding: 8px;
        border:#999 1px solid;
      }
      .myTable tr:nth-child(odd) {
        background: #D5D5D5;
        opacity: 0.6;
      }
      .myTable tr:nth-child(even) {
        background: #FFFFFF;
        opacity: 0.7;
      }
      div{
        padding-left: 4%;
        padding-right: 4%;
        padding-top: 0%;
        padding-bottom: 2%;
      }
      body{
        background-image: url("Complementos/polygon2.jpg");
        background-size: 100vw 100vh;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-color: #E6E7E8;
      }
      form{
        width: 850px;
        margin: auto;
        background: rgba(0,0,0,0.05);
        padding: 10px 20px;
        box-sizing: border-box;
        border-radius: 30px;
      } 
      h2{
        color: #585858;
        text-align: center;
      }
      h3{color: #424242;
        margin-bottom: 10px;
      }
      h4{color: #424242;
        margin-bottom: 10px;
        text-align: right;
      }
      textarea{
        width: 100%;
        margin-bottom:40px;
        box-sizing: border-box;
        border-radius: 7px;
        min-height: 100px;
        max-height: 200px;
        max-width: 100%;
      }
      .mybottom{
        padding: 10px;
        cursor:pointer;
      }
    </style>
  </head> 
</html>
<!-- ________________________ -->
<?php 
    include("conexion.php");
    $consulta = "SELECT * FROM escuelas";
?>
<!-- ________________________ -->  
  <table border="0"  width="100%">  
    <tr>
      <td width="100%" align="right"><img src="Complementos/heather.png" width="900" height="100"></td>
    </tr>
  </table>
<!-- ________________________ --> 
<div>
    <?php
      date_default_timezone_set('America/Mexico_City');
      echo date('d / m / Y');
        echo "<h4>";
        include("sesion.php");
        echo "</h4>";
    ?>
<table border="0" width="100%" height="20%">
    <tr>
        <form  method="POST" action="busqueda.php">
          <h3>BUSCAR CCT</h3>
          <input type="varchar" name="busca" id="busqueda" placeholder="Ingresa la CCT" required>
          <input type="submit" name="submit" value="BUSCAR">
        </form>
        </td>
    </tr>
</table>
<!-- ________________________ -->
<?php
  $busca ="";
  $busca=$_POST['busca'];
  mysql_connect("localhost","root","rootroot");
  mysql_select_db("prop_acom");
  $query=$bd->prepare($consulta);
  $query->execute();
  $rs = $query->fetchAll();
    if ($busca!="cct") {
      $busqueda=mysql_query("SELECT * FROM escuelas where cct='$busca'");
    } 
?>
<!-- ________________________ -->
<h2>DATOS GENERALES DEL PLANTEL</h2>
<table class="myTable">
    <tr><td><strong><center>DO</center></strong></td>
        <td><strong><center>ZE</center></strong></td>
        <td><strong><center>NOMBRE DE ESCUELA</center></strong></td>
        <td><strong><center>CCT</center></strong></td>
        <td><strong><center>TURNO</center></strong></td>
        <td><strong><center>DOMICILIO DEL PLANTEL</center></strong></td>
        <td><strong><center>TELÉFONOS</center></strong></td>
        <td><strong><center>DIRECTOR</center></strong></td>
        <td><strong><center>MAIL</center></strong></td>
    </tr>
<?php
while ($muestra=mysql_fetch_array($busqueda)) {
	echo '<tr>';
  //-------------------------------------
    echo '<td>'. $muestra['do'].'</td>';
      $d=$muestra['do'];
      $_SESSION['dook']=$d;
      $do_result=$_SESSION['dook'];

    echo '<td>'. $muestra['ze'].'</td>';
      $z=$muestra['ze'];
      $_SESSION['zeok']=$z;
      $ze_result=$_SESSION['zeok'];
  //--------------------------------------
  echo '<td>'. $muestra['nombre'].'</td>';
      $nom=$muestra['nombre'];
      $_SESSION['nombreok']=$nom;
      $nombre_result=$_SESSION['nombreok'];


  echo '<td>'. $muestra['cct'].'</td>';
      $ct=$muestra['cct'];
      $_SESSION['ctok']=$ct;
      $cct_result=$_SESSION['ctok'];

	echo '<td>'. $muestra['turno'].'</td>';
      $tur=$muestra['turno'];
      $_SESSION['turnook']=$tur;
      $turno_result=$_SESSION['turnook'];
  
	echo '<td>'. $muestra['domicilio'].'</td>';
      $dom=$muestra['domicilio'];
      $_SESSION['domiciliook']=$dom;
      $domicilio_result=$_SESSION['domiciliook'];
      
	echo '<td>'. $muestra['telefonos'].'</td>';
      $tel=$muestra['telefonos'];
      $_SESSION['telefonosok']=$tel;
      $telefonos_result=$_SESSION['telefonosok']; 

  echo '<td>'. $muestra['director'].'</td>';
      $dir=$muestra['director'];
      $_SESSION['directorok']=$dir;
      $director_result=$_SESSION['directorok'];

  echo '<td>'. $muestra['correo'].'</td>';
      $corr=$muestra['correo'];
      $_SESSION['correook']=$corr;
      $correo_result=$_SESSION['correook'];

    $cct=$muestra['cct'];
	echo '</tr>';
    }
?>
</table><br>
<!--_______________________________________________________________________________________-->
  <form action="nuevo_respuesta_2.php" method="post">
  <h3>FECHA DE VISITA</h3>
  <input type="varchar" name="txttitle" required placeholder="DD/MM/AAAA"><br><br>

<h3>PROPOSITO DE LA VISITA</h3>
<textarea name="txtdatos" placeholder="(Describa el motivo de la visita)." required></textarea>
<h3>NECESIDADES DEL PLANTEL</h3>
<textarea name="txtnecesidades" placeholder="(Describa las principales necesidades detectadas en la visita)." required></textarea>
<h3>ACUERDOS REALIZADOS</h3>
<textarea name="txtacuerdos" placeholder="(Describa los acuerdos realizados en la visita)." required></textarea>
<br><br>
       <center><button class="mybottom">Agregar</button></center><br>
  </form>
<!--_______________________________________________________________________________________-->
    <br><center><button class="mybottom" onclick="inicio()">Menu / Inicio</button></center>
</div>
<table border="0"  width="100%">  
      <tr>
          <td width="100%"> <center><img src="Complementos/footer.png" width="1180" height="117"></center> </td>
      </tr>
</table>
    <script>     
        function inicio(){
        window.location="menu.php"
        }
    </script>