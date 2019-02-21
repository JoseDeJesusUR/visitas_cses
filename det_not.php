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
<h2>COMENTARIOS</h2>
  <table class="myTable">
    <tr>
        <td><strong><center>NOTAS</center></strong></td>
      </tr>    
    <?php for( $cont=0; $cont < count($rs) ; $cont++){ ?> 
      <tr>
        <td><?php echo substr($rs[$cont]["comen"],-30) ?></td>
      </tr>
    <?php }//for ?> 
  </table><br><br>
  <table align="center">
    <tr>
        <td><button class="mybottom" onclick="menu()">Menu / Inicio</button></td>
        <td><button class="mybottom" onclick="reg()">Regresar</button></td>
    </tr>
  </table>
</div>
      <script>
        function menu(x){        
        window.location = "menu.php?idx="+x
        }
        function reg(x){        
        window.location = "notas.php"
        }
        function detalle(x){        
        window.location = "det_not.php?idx="+x
        }
      </script>
<!-- _________Foter__________ -->
  <table border="0"  width="100%">  
    <tr>
      <td width="100%"> <center><img src="Complementos/footer.png" width="1180" height="117"></center> </td>
    </tr>
  </table>
<!-- ________/Foter__________ -->