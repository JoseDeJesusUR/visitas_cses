<!DOCTYPE html>
<html>
  <head>
      <meta charset="utfv-8">
      <meta name="viewport" content="width=divice-width, initial-scale=1, maximum-scale=1">
      <link rel="stylesheet" type="text/css" href="css/normalize.css">
      <script src="css/modernizr-custom.js"></script>
      <title>NOTAS</title>
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
        padding-top: 1%;
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
        margin: 0;
        margin-bottom: 10px;
      }
      h4{color: #424242;
        margin: 0;
        margin-bottom: 10px;
        text-align:right; 
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
<!-- ________Heather_________ -->  
  <table border="0"  width="100%">  
    <tr>
      <td width="100%" align="right"><img src="Complementos/heather.png" width="900" height="100"></td>
    </tr>
  </table>
<!-- _______/Heather_________ -->
  <?php 
  session_start();
    include("conexion.php");
    $id_usu=$_SESSION["ses_id"];
    $consulta = "SELECT * FROM visita WHERE usuario='$id_usu'";
    $query=$bd->prepare($consulta);
    $query->execute();
    $rs = $query->fetchAll();
  ?>
<div>
  <?php
    date_default_timezone_set('America/Mexico_City');
    echo date('d / m / Y');
    echo "<h4>";
    include("sesion.php");
    echo "</h4>";
  ?>
<h2>VISITAS REALIZADAS</h2>
  <table class="myTable">
    <tr>
        <td><strong><center>FECHA</center></strong></td>
        <td><strong><center>DATOS</center></strong></td>
        <td><strong><center>NECESIDADES</center></strong></td>
        <td><strong><center>ACUERDOS</center></strong></td>
        <td style='color:teal'><strong><center>VISITA</center></strong></td><!--_____BOTON_____-->
        <td><strong><center>ACCIONES</center></strong></td>
        <td><strong><center>RESULTADOS</center></strong></td>
        <td style='color:teal'><strong><center>SEGUIMIENTO</center></strong></td><!--_____BOTON_____-->
        <td style='color:maroon'><strong><center>ELIMINAR</center></strong></td><!--_____BOTON_____-->
        <!--<td style='color:steelblue'><strong><center>COMENTARIO</center></strong></td>-->
      </tr>    
    <?php for( $cont=0; $cont < count($rs) ; $cont++){ ?> 
      <tr>
        <td><?php echo $rs[$cont]["titulo"] ?></td>
        <td><?php echo substr($rs[$cont]["txt_datos"],-20) ?></td>
        <td><?php echo substr($rs[$cont]["txt_necesidades"],-20) ?></td>
        <td><?php echo substr($rs[$cont]["txt_acuerdos"],-20) ?></td>
        <td><CENTER><button onclick="editar(<?php echo $rs[$cont]["id"] ?>)">Editar</button></CENTER></td>  
        <td><?php echo substr($rs[$cont]["txt_acciones"],-20) ?></td>
        <td><?php echo substr($rs[$cont]["txt_resul"],-20) ?></td>
        <!--<td><CENTER><button onclick="ing_seg(<?php //echo $rs[$cont]["id"] ?>)">Ingresar</button></CENTER></td>-->
        <td><CENTER><button onclick="edi_seg(<?php echo $rs[$cont]["id"] ?>)">Insertar</button></CENTER></td>       
        <td><CENTER><button onclick="borrar(<?php echo $rs[$cont]["id"] ?>)">Eliminar</button></CENTER></td>
        <!--<td><?php //echo substr($rs[$cont]["comen"],-20) ?></td>-->
      </tr>
    <?php }//for ?> 
  </table>
<br><br>
        <button class="mybottom" onclick="nuevo()">Nuevo</button>
        <button class="mybottom" onclick="cancelar()">Menu / Inicio</button>
</div>
      <script>
        //function ing_seg(){        
        //window.location = "seguimiento.php"
        //}
        function borrar(x){        
        //alert("borrar->" + x)
        window.location = "borrar.php?idx="+x
        }
        function edi_seg(x){        
        //alert("borrar->" + x)
        window.location = "edit_seguimiento.php?idx="+x
        }
        function editar(x){        
        //alert("borrar->" + x)
        window.location = "editar.php?idx="+x
        }
        function nuevo(){        
        window.location = "busqueda.php"
        }
        function cancelar(){
        window.location="menu.php"
        }
      </script>
<!-- _________Foter__________ -->
  <table border="0"  width="100%">  
    <tr>
      <td width="100%"> <center><img src="Complementos/footer.png" width="1180" height="117"></center> </td>
    </tr>
  </table>
<!-- ________/Foter__________ -->