<!DOCTYPE html>
<html lang="es">
   <meta charset=UTF-8>
   <head>
      <title>Login Page</title>
      <link rel="stylesheet" type="text/css" href="../css/estilos.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   </head>
   <body>
      <?php
         require_once '../controller/sessionController.php';
         ?>
      <!-- Aqui mostramos la pagina principal dodne vemos todas las salas y las estadisticas-->
      <div style="padding-left: 11%;">
         <h3 style="color:#0ea4fb;">Panel de control</h3>
         <h5 style="color:#717981;"><a style="text-decoration:none;color:#69bcfb;" href="../view/zona.admin.php">Inicio</a> > <a style="text-decoration:none;color:#69bcfb;" href="../view/administrarusu.php">Administrar Usuarios</a> > Insertar Usuarios</h5>
      </div>
      <br>
      <div style="padding-left: 11%;">
  <section class="form-register">
  <form action="cambiar.php" method="POST">
     <?php 
     include '../model/adminDAO.php';
     $modificar=new adminDao();
     $milista=$modificar->getUser($_GET['DNI_empleado']);
      ?>
    <h4>MODIFICAR DATOS DEL EMPLEADO</h4>
    <input class="controls" type="hidden" name="DNI_empleado" value="<?php echo $milista['DNI_empleado']?>">
    <input class="controls" type="text" name="nombre_empleado" placeholder="Nombre" value="<?php echo $milista['nombre_empleado']?>">
    <input class="controls" type="text" name="apellido1_empleado" placeholder="Apellido paterno" value="<?php echo $milista['apellido1_empleado']?>">
    <input class="controls" type="text" name="apellido2_empleado" placeholder="Apellido materno" value="<?php echo $milista['apellido2_empleado']?>">
    <input class="controls" type="text" name="tipo_empleado" placeholder="Tipo" value="<?php echo $milista['tipo_empleado']?>">
    <input type="submit" name="submit" value="Modificar">
  </section>

</body>
</html>