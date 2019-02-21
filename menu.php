<?php    
echo "<br><center><h3>";
include("sesion.php");
echo "<br> </h3></center>";
    include("conexion.php");
    $consulta = "SELECT * FROM usuario";
?>
<hr width="45%" color="gray">
<br><center><button class="mybottom" onclick="cerrar()">Cerrar Sesión</button></center><br><br>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MENU</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Creative CSS3 Animation Menus" />
        <meta name="keywords" content="menu, navigation, animation, transition, transform, rotate, css3, web design, component, icon, slide" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/menu.css" />
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
        <style type="text/css">
            body{
                background-image: url("Complementos/polygon2.jpg");
                background-size: 100vw 100vh;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-color: #E6E7E8;
                }
            .mybottom{
                padding: 10;
                cursor:pointer;
                }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
            <div class="content">
                <ul class="ca-menu">
                    <li>
                        <a href="busqueda.php">
                            <span class="ca-icon">U</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Registrar Visita</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="sistema.php">
                            <span class="ca-icon">p</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Seguimiento</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="notas.php">
                            <span class="ca-icon">@</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Notas</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="report_vis.php">
                            <span class="ca-icon">D</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Imprimir</h2>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    </body>
</html>
<table border="0"  width="100%">  
      <tr>
          <td width="100%"> <center><img src="Complementos/footer.png" width="1180" height="117"></center> </td>
      </tr>
</table>

   <script>  
        function cerrar(){
        window.location="logout.php"
      }
    </script>