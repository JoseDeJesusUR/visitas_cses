<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utfv-8">
      <meta name="viewport" content="width=divice-width, initial-scale=1, maximum-scale=1">
      <title> LOGIN </title>
      <link rel="stylesheet" type="text/css" href="css/normalize.css">
      <script src="css/modernizr-custom.js"></script>
      <link rel="stylesheet" type="text/css" href="css/normalize.css">
      <link rel="shortcut icon" href="Complementos/Icon.png" type="image/x-icon">
  <style type="text/css">
    .myimg{
    opacity: .9;
    transition: all .5s ease;
    margin-right: 150px;
    }
    div{
      text-align: center;
      padding-left: 15%;
      padding-right: 10%;
      padding-bottom: 2%;
      padding-top: 2%;
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
      box-sizing: border-box;
      border-radius: 30px;
      padding-left: 7%;
      padding-right: 7%;
      padding-bottom: 7%;
      padding-top: 7%;
    } 
    .mybottom{
    padding: 5px;
    cursor:pointer;
    }
  </style>
    </head>
<!-- ________________________ -->  
  <table border="0"  width="100%">  
    <tr>
      <td width="100%" align="right"><img src="Complementos/heather.png" width="900" height="100"></td>
    </tr>
  </table>
<!-- ________________________ --> 
<div>
    <form action="formulario_respuesta.php" method="post">
      <h2>INGRESA TUS DATOS</h2>
<!-- ________________________ -->   
<?php 
     if( isset( $_GET["error"] )  ) {          
            echo "<p style='color:red;text-align:center;'>                 
                     USUARIO INVALIDO                
                  </p>";          
      }
    ?>
<!-- ________________________ -->  
        <table>
            <tr>
              <td><strong>USUARIO</strong></td>
              <td><input name="txtus" placeholder="&#128272; Nombre" required></td>
            </tr>

            <tr>
              <td><strong>PASSWORD</strong></td>
              <td> <input name="txtpass" type="password" placeholder="&#128272; *****" required></td>
            </tr>
        </table>
       <button class="mybottom">Enviar</button>
    </form>
  </div>
</body>
</html>

 <table border="0"  width="100%" >  
      <tr align="right" height="87">
        <td><a href="Admin/loguin_admin.php"><img class="myimg" src="Admin/img/admin2.png" onmouseover="this.width=80;this.height=80;" onmouseout="this.width=60;this.height=60;" width="60" height="60"></a></td>
      </tr>
      <tr>
          <td width="100%"> <center><img src="Admin/img/footer2.png" width="1180" height="117"></center> </td>
      </tr>
  </table>