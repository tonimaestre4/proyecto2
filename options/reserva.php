<?php

require_once '../controller/conexion.php';
try {
    
    $nombre_ocupacion=$_POST['nombre_ocupacion']; 
    $fecha_ocupacion=$_POST['fecha_ocupacion'];
    $franja_ocupacion=$_POST['franja_ocupacion'];
    $DNI_empleado=$_POST['DNI_empleado']; 
    $id_mesa=$_POST['id_mesa'];

    $query1= "SELECT * FROM tbl_ocupacion WHERE fecha_ocupacion='{$fecha_ocupacion}' AND franja_ocupacion='{$franja_ocupacion}' AND id_mesa='{$id_mesa}'";
    $sentencia=$pdo->prepare($query1);
    $sentencia->execute();
    $result=$sentencia->fetch(PDO::FETCH_ASSOC);
    $numRow=$sentencia->rowCount();
    if($numRow !=1){
        $query = "INSERT INTO tbl_ocupacion (nombre_ocupacion,fecha_ocupacion,franja_ocupacion,DNI_empleado,id_mesa) VALUES (?,?,?,?,?)";
        $sentencia=$pdo->prepare($query);
            
            $sentencia->bindParam(1,$nombre_ocupacion);
            $sentencia->bindParam(2,$fecha_ocupacion);
            $sentencia->bindParam(3,$franja_ocupacion);
            $sentencia->bindParam(4,$DNI_empleado);
            $sentencia->bindParam(5,$id_mesa);
            $sentencia->execute();
    
            header ('Location:../view/total.php');
    } else{
        echo "<script> alert('La hora ya ha sido reservada.')</script>";
        // header ('Location:../view/total.php');
        echo "<a href='../view/total.php'>Volver</a>";
    }
    

} catch (Exception $ex) {
    echo $ex->getMessage();
   
}

?>