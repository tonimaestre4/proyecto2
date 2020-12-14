<?php

include '../model/adminDAO.php';
$myadmindao=new AdminDao();
$myadmindao->eliminarUsuario($_GET['DNI_empleado']);
header ('Location:../view/administrarusu.php');

?>