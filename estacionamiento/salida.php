<?php

$conexion=mysqli_connect('localhost','root','','estacionamiento');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="img/logo.png">
    <title>Grupo Garza Limon</title>
    
</head>
<body>
    <header>
        <div class="logo">
        <img src="img/logo.png" class="logotipo">
        </div>
        <div class="titulo">
            <h1>Estacionamiento Garza Limon</h1>
         </div>    
    </header>
<div>
    <nav>
        <ul>
            <li ><a  href="index.php">Entrada</a></li>
            <li class="active"><a href="salida.php">Salida</a></li>
        </ul>
    </nav>
</div>


    <div class="contenido-salida">
      <table>
          <thead>
          <tr>
              <th>Num. Placa</th>
              <th>Tiempo estacionado</th>
              <th>Tipo</th>
              <th>Cantidad a pagar</th>
          </tr>
          </thead>
          <?php 
          $sql="SELECT * from tim_est";
          $result=mysqli_query($conexion,$sql);
          
          while($mostrar=mysqli_fetch_array($result)){

          
          ?>
          <tr>
              <td><?php echo $mostrar['placas']?></td>
              <td><?php echo $mostrar['id']?></td>
              <td><?php echo $mostrar['tipo']?></td>
              <td><?php echo $mostrar['entrada']?></td>
          </tr>
         <?php
        }
        ?> 
      </table>
    </div>
</body>
</html>