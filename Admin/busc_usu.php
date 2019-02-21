<!DOCTYPE html>
<html>
  <head>
      <meta charset="utfv-8">
      <meta name="viewport" content="width=divice-width, initial-scale=1, maximum-scale=1">
      <link rel="stylesheet" type="text/css" href="../css/normalize.css">
      <script src="../css/modernizr-custom.js"></script>
      <title>ADMINISTRADOR</title>
      <link rel="shortcut icon" href="../Complementos/Icon.png" type="image/x-icon">
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
        background: #D6DBDF;
        opacity: 0.8;
      }
      .myTable tr:nth-child(even) {
        background: #FFFFFF;
        opacity: 0.8;
      }
      div{
        padding-left: 4%;
        padding-right: 4%;
        padding-top: 1%;
        padding-bottom: 0%;
      }
      body{
        background-image: url("img/3.png");
        background-size: 100vw 100vh;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-color: #E6E7E8;
      }
      h2{
        color: #585858;
        text-align: center;
      }
      h3{color: #424242;
        margin-bottom: 10px;}
      h4{color: #424242;
        margin: 0;
        margin-bottom: 10px;
        text-align:right; 
      }
      .mybottom{
        padding: 10px;
        cursor:pointer;
      }
      .myimg{
        transition: all .3s ease;
        }
    </style>
  </head> 
</html>
<!-- ________Heather_________ -->  
  <table border="0"  width="100%">  
    <tr>
      <td width="100%" align="right"><img src="../Complementos/heather.png" width="900" height="100"></td>
    </tr>
  </table>
<!-- _______/Heather_________ -->
<?php 
    include("../conexion.php");
    $consulta = "SELECT * FROM escuelas";
?>
<!-- ________________________ --> 
<div>
  <?php
    echo "<h4>";
    include("ses_admin.php");
    echo "</h4>";
  ?>
<!-- ________________________ --> 
<table border="0" width="100%" height="20%">
    <tr>
        <form  method="POST" action="busc_usu.php">
          <h3>NOMBRE</h3>
          <input type="varchar" name="busca" id="busqueda" placeholder="Ingresa el nombre" required>
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
    if ($busca!="busca") {
      $busqueda=mysql_query("SELECT * FROM visita where nom_usu='$busca'");
    } 
?>
<!-- ________________________ -->
<h2>DATOS GENERALES DE VISITAS</h2>
<table class="myTable">
    <tr><td><strong><center>NOMBRE</center></strong></td>
        <td><strong><center>FECHA</center></strong></td>
        <td><strong><center>CCT</center></strong></td>
        <td><strong><center>ESCUELA</center></strong></td>
        <td><strong><center>PROPOSITO</center></strong></td>
        <td><strong><center>IMRIMIR</center></strong></td>
        <td><strong><center>COMENTARIOS, INDICACIONES</center></strong></td>
        <td><strong><center>NOTAS</center></strong></td>
    </tr>
<?php
while ($muestra=mysql_fetch_array($busqueda)) {
  echo '<tr>';
  echo '<td>'. $muestra['nom_usu'].'</td>';
  echo '<td>'. $muestra['titulo'].'</td>';//FECHA
  echo '<td>'. $muestra['cct_esc'].'</td>';
  echo '<td>'. $muestra['nombre_esc'].'</td>';
  echo '<td>'. substr($muestra['txt_datos'],-30).'</td>'; //PROPOSITO?>
  <td><a href="../fpdf/pdf2.php" target="_blanc"><img src="img/ver.png" width="99" height="41"></a></td>
  <!--<td align="center"><a target="_blanc" href="../fpdf/pdf2.php?id=<?$muestra["id"]?>">Ver</a></td>-->
  <td><CENTER><button class="mybottom" onclick="comentario(<?php echo $muestra ["id"] ?>)">AGREGAR</button></CENTER></td>
  <?php $cct=$muestra['cct'];
  echo '<td>'. substr($muestra['comen'],-25).'</td>';
  echo '</tr>';
    }
?>
</table> <br>
</div>
  <!--<table align="center" border="0">
    <tr>
        <td><button class="mybottom" onclick="cerrar()">Cerrar</button></td>
        <td width="20%"></td> 
        <td><button class="mybottom" onclick="repor()">Reporte General</button></td>
    </tr>
  </table>-->
      <script>
        function comentario(x){        
        window.location = "comen.php?idx="+x
        }
        /*function repor(x){        
        window.location = "../fpdf/pdf.php?idx="+x
        }
        function cerrar(x){        
        window.location = "../logout.php"
        }*/
      </script>
<table border="0" width="100%" height="75">
  <tr>
    <td align="right"><a href="../logout.php"><img class="myimg" src="img/salir.png" onmouseover="this.width=60;this.height=60;" onmouseout="this.width=50;this.height=50;" width="50" height="50"></a>
    <a href="../fpdf/pdf.php" target="_blanc"><img class="myimg" src="img/download.png" onmouseover="this.width=60;this.height=60;" onmouseout="this.width=50;this.height=50;" width="50" height="50"></a></td> <td width="8%"></td>
  </tr>
</table>
<!-- _________Foter__________ -->
  <table border="0"  width="100%">  
    <tr>
      <td width="100%"> <center><img src="../Complementos/footer.png" width="1180" height="117"></center> </td>
    </tr>
  </table>
<!-- ________/Foter__________ -->