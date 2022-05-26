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
            <li class="active"><a  href="index.php">Entrada</a></li>
            <li><a href="salida.php">Salida</a></li>
        </ul>
    </nav>
</div>

<?php 
date_default_timezone_set('America/Mexico_city');
$fecha=date("d-m-Y H:i:s");
?>

    <div class="contenido">
       <form action="entrada.php" method="post">
           <br><br><br><br>
           <div class="dir">
           <p>
           <label for="">Entrada: </label>
           <input type="datetime"  placeholder="hora de llegada" value="<?=$fecha?>" name="fecha" required>
           </p>
           <p>
           <label for="">Tipo de Vehiculo: </label>
           <select name="tipo" id="" required>
               <option value="Residente">Residente</option>
               <option value="No Residente">No Residente</option>
               <option value="Oficial">Oficial</option>
           </select>
        </p>
           
        </div>
    <div class="dir2">
            
        <p>
           <label for="">Placa: </label>
           <input type="text" placeholder="hora de llegada" name="placa" required>
        </p>  
        </div>
        <div class="area-boton">
            <input class="boton" name="registrar" type="submit" value="Registrar">   
        </div>
        </form> 

    </div>
</div>
<div class="contenido2">
<table>
          <thead>
          <tr>
              <th>Num. Placa</th>
              <th>Tipo</th>
              <th>Hora de entrada</th>
              <th>Terminar</th>
              
          </tr>
          </thead>
          <?php 
          $sql="SELECT * from tim_est";
          $result=mysqli_query($conexion,$sql);
          
          while($mostrar=mysqli_fetch_array($result)){

          
          ?>
          <tr>
              <td><?php echo $mostrar['placas']?></td>
              <td><?php echo $mostrar['tipo']?></td>
              <td><?php echo $mostrar['entrada']?></td>
              <td><a href="mostrarac.php?id=<?php echo $row['idraza']; ?>">Finalizar</a></td>
          </tr>
         <?php
        }
        ?> 
      </table>
</div>
    <footer>
    <div class="logo">
        <img src="img/logo.png" class="logotipo">
    </div>
    <div >
        <h4>Areas de la empresa</h4>
        <a href="https://www.facebook.com/OraleQueChiquito">Orale que chiquito,  </a>
        <a href="https://www.facebook.com/Cosmocable">Cosmocable,   </a>
        <a href="https://www.facebook.com/ElChuliprecio">El chuli precio</a>
        <br>
        <a href="https://www.facebook.com/LaTremendaDgo">La tremenda,   </a>
        <a href="https://www.facebook.com/FundacionGarzaLimon">Fundacion Garza Limon,  </a>
        <a href="https://www.facebook.com/FundacionGarzaLimon">Noticieros</a>

    </div>
    </footer>
</body>
</html>