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
         <h5 style="color:#717981;"><a style="text-decoration:none;color:#69bcfb;" href="zona.admin.php">Inicio</a> > Administrar Usuarios</h5>
      </div>
      <br>
      <div style="padding-left: 11%;" class="w3-container">
      <a href="../options/insertarusu.php"><input type="submit" class="button_active" value="INSERTAR USUARIO"></a>
  </div>
  <br>
  <?php 

include '../model/adminDao.php';
$myadmindao=new AdminDao();
$listausuarios=$myadmindao->getlistaUsuarios();

echo "<div style='padding-left: 11%; padding-right:5%;'>";
echo "<table class='w3-table-all'>";
echo "<tr class='w3-blue'>";
echo "<th>DNI</th>";
echo "<th>Nombre</th>";
echo "<th >1r Apellido</th>";
echo "<th >Tipo</th>";
echo "<th >Actualizar</th>";
echo "<th >Eliminar</th>";
echo "</tr>";

foreach($listausuarios as $usuario){
    echo "<tr>";
    echo "<td>{$usuario['DNI_empleado']}</td>";
    echo "<td>{$usuario['nombre_empleado']}</td>";
    echo "<td>{$usuario['apellido1_empleado']}</td>";
    echo "<td>{$usuario['tipo_empleado']}</td>";
    echo "<td><a href='../options/modificar.php?DNI_empleado={$usuario['DNI_empleado']}&nombre_empleado={$usuario['nombre_empleado']}&apellido1_empleado={$usuario['apellido1_empleado']}&apellido2_empleado={$usuario['apellido2_empleado']}&tipo_empleado={$usuario['tipo_empleado']}'>Modificar<a></td>";
    echo "<td><a href='../options/eliminar.php?DNI_empleado={$usuario['DNI_empleado']}'>Eliminar<a></td>";
    echo "</tr>";
}
//       echo '<footer style="position:absolute;">';
//          echo '<h5 style="font-size:15px;">© 2015-2020 Cotizador web desarrollado por: <a style="color:blue;">Toni Maestre Bayo</a></h5>';
//       echo '</footer>';
//    echo'</body>';
// echo'</html>';

?>