<?php

require_once '../controller/conexion.php';
try {

    $query = "INSERT INTO tbl_empleado (DNI_empleado,nombre_empleado,apellido1_empleado,apellido2_empleado,tipo_empleado,password_empleado) VALUES (?,?,?,?,?,?)";
    $sentencia=$pdo->prepare($query);
   
    $DNI_empleado=$_POST['DNI_empleado'];
    $nombre_empleado=$_POST['nombre_empleado']; 
    $apellido1_empleado=$_POST['apellido1_empleado'];
    $apellido2_empleado=$_POST['apellido2_empleado'];
    $tipo_empleado=$_POST['tipo_empleado'];
    $password_empleado=$_POST['password_empleado']; 
        
        $sentencia->bindParam(1,$DNI_empleado);
        $sentencia->bindParam(2,$nombre_empleado);
        $sentencia->bindParam(3,$apellido1_empleado);
        $sentencia->bindParam(4,$apellido2_empleado);
        $sentencia->bindParam(5,$tipo_empleado);
        $sentencia->bindParam(6,$password_empleado);
        $sentencia->execute();

        header ('Location:../view/administrarusu.php');

} catch (Exception $ex) {
    echo $ex->getMessage();
   
}

?>