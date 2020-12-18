<?php

include '../model/adminDAO.php';
$DNI_empleado=$_POST['DNI_empleado'];
$nombre_empleado=$_POST['nombre_empleado']; 
$apellido1_empleado=$_POST['apellido1_empleado'];
$apellido2_empleado=$_POST['apellido2_empleado'];
$tipo_empleado=$_POST['tipo_empleado'];
$myadmindao=new AdminDao();
$myadmindao->modificarEmpleado();
header ('Location:../view/administrarusu.php');

?>