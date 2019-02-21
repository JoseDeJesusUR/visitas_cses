<!DOCTYPE html>
<html>
  <head>
      <meta charset="utfv-8">
      <meta name="viewport" content="width=divice-width, initial-scale=1, maximum-scale=1">
      <link rel="stylesheet" type="text/css" href="../css/normalize.css">
      <script src="../css/modernizr-custom.js"></script>
      <title>COMENTARIOS</title>
      <link rel="shortcut icon" href="../Complementos/Icon.png" type="image/x-icon" >
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
        padding-bottom: 1%;
      }
      body{
        background-image: url("img/3.png");
        background-size: 100vw 100vh;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-color: #E6E7E8;
      }
      form{
        width: 1250px;
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
        width: 1075px;
        margin-bottom:5px;
        box-sizing: border-box;
        border-radius: 7px;
        min-height: 100px;
        max-height: 200px;
        max-width: 1075px;
      }
      td{
        max-width: 255px;
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
      <td width="100%" align="right"><img src="../Complementos/heather.png" width="900" height="100"></td>
    </tr>
  </table>
<!-- _______/Heather_________ -->
<div>
<?php 
  echo "<h4>";
  include("ses_admin.php");
  echo "</h4>";
  $idx=$_GET["idx"];
  include("../conexion.php");
  $consulta = "SELECT * FROM visita WHERE id=".$idx;
  $query = $bd->prepare($consulta);
  $query->execute();
  $rs = $query->fetchAll();
?>
<!-- ________________________ -->
<form action="comen_resp.php" method="post">    
  <input name="txtid" value="<?php echo $rs[0]["id"]; ?>" type="hidden"> 
  <div>
    <table class="myTable">
      <tr>
        <td><strong><center>AGREGAR Y/O EDITAR COMENTARIOS</center></strong></td>
      </tr>
      <tr>
        <td><textarea name="txtcomentarios" placeholder="Agrega tus Comentarios:"><?php echo $rs[0]["comen"];?></textarea></td>   
      <tr>
    </table>  
      <br>
        <center><button class="mybottom">Guardar</button></center>
</form>
</div>
<!-- ________________________ -->
<br>
  <center><button class="mybottom" onclick="cerrar()">Cancelar</button></center>
    <script>
      function cerrar(){
      window.location="busc_usu.php"
      }
    </script>
<!-- _________Foter__________ -->
  <table border="0"  width="100%">  
    <tr>
      <td width="100%"> <center><img src="../Complementos/footer.png" width="1180" height="117"></center> </td>
    </tr>
  </table>
<!-- ________/Foter__________ -->