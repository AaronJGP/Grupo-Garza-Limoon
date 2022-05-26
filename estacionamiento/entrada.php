<?php
include 'index.php';

$conexion=mysqli_connect('localhost','root','','estacionamiento');

if(isset($_REQUEST['registrar'])){

    $fecha=$_POST['fecha'];
    $tipo=$_POST['tipo'];
    $placa=$_POST['placa'];
    
    $consulta="INSERT INTO tim_est (placas,tipo,salida)VALUES('$placa','$tipo','$fecha')";
    $funcion=mysqli_query($conexion,$consulta);
    if($funcion){
        echo '<script>header("Location: actualizarraza.php");</script>';
    }else{
        echo '<script>alert("Error)</script>';
    }

}



?>