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
  <form action="crearusu.php" method="POST">
    <h4>CREACIÓN DE UN NUEVO EMPLEADO</h4> 
    <input class="controls" type="text" name="DNI_empleado" placeholder="DNI">
    <input class="controls" type="text" name="nombre_empleado" placeholder="Nombre">
    <input class="controls" type="text" name="apellido1_empleado" placeholder="Apellido paterno">
    <input class="controls" type="text" name="apellido2_empleado" placeholder="Apellido materno">
    <input class="controls" type="text" name="tipo_empleado" placeholder="Tipo">
    <input class="controls" type="password" name="password_empleado" placeholder="Contraseña">
    <p>Estoy de acuerdo con <a href="https://policies.google.com/terms?hl=es" target="_blank">Terminos y Condiciones</a></p>
    <input type="submit" name="submit" value="Acceder"><a href="#"></a>
  </section>
</div>
</body>
</html>