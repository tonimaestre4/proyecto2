<!DOCTYPE html>
<html lang="es">
   <meta charset=UTF-8>
   <head>
      <title>Login Page</title>
      <link rel="stylesheet" type="text/css" href="../css/estilos.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <style>
         table {
         border-collapse: collapse;
         width: 100%;
         border: #f2f7f8 solid 15px;
         }
         th, td {
         text-align: left;
         padding: 8px;
         }
         tr:nth-child(even){background-color: #f2f2f2}
         th {
         background-color: gray;
         color: white;
         }
      </style>
   </head>
   <body>
      <?php
         require_once '../controller/sessionController.php';
         ?>
      <!-- Aqui llamamos a la funcion nombresala para mostrar los nombres de la sala y la funcion ocupacionsala para mostrar el contenido de las salas -->
      <div style="padding-left: 11%;">
         <?php
            require_once '../model/salaDAO.php';
            $id=$_REQUEST['id_sala'];
            $sala = new Sala($id);
            $salaDAO = new SalaDAO();
            $salaDAO->nombresala($sala);
         ?>
      </div>
      <div style="padding-left: 11%;">
      <label>Fecha:</label>
      <form action="salas.php" method="get">
      <?php
      $hoy = date("Y-m-d");
      $max = date("Y-m-d", strtotime($hoy . "+ 14 days"));
      if (isset($_REQUEST['fecha'])) {
         echo "<input type='date' name='fecha' value='" . $_REQUEST['fecha'] . "' min='" . $hoy . "' max='" . $max . "'>";
      } else {
         echo "<input type='date' name='fecha' value='" . $hoy . "' min='" . $hoy . "' max='" . $max . "'>";
      }
      ?>
      <!-- <input type="date" id="fecha" name="fecha"> -->
            <!-- <label>Franja horaria:</label>
            <select name="franja" id="franja" class="form-control">
            <option value="12:00h-13:00h">12:00h-13:00h</option>
            <option value="13:00h-14:00h">13:00h-14:00h</option>
            <option value="14:00h-15:00h">14:00h-15:00h</option>
            <option value="15:00h-16:00h">15:00h-16:00h</option>
            <option value="16:00h-17:00h">16:00h-17:00h</option>
            <option value="17:00h-18:00h">17:00h-18:00h</option>
            <option value="18:00h-19:00h">18:00h-19:00h</option>
            <option value="19:00h-20:00h">19:00h-20:00h</option>
            <option value="20:00h-21:00h">20:00h-21:00h</option>
            <option value="21:00h-22:00h">21:00h-22:00h</option>
            <option value="22:00h-23:00h">22:00h-23:00h</option>
            </select> -->
            <input type="hidden" id="id_sala" name="id_sala" value="<?php echo $_GET['id_sala']?>">
            <input class="submit" type="submit" value="Filtrar">
            </div>
            </select>
      </form>
      </div>
      <div class="row">
         <div class="one-column">
            <?php
               if (isset($_REQUEST['fecha'])) 
               {
                  $id=$_GET['id_sala'];
                  $fecha=$_GET['fecha'];
                  $salaDAO = new SalaDAO();
                  $salaDAO->ocupacionsala($id,$fecha);
               }  else{
                  $id=$_GET['id_sala'];
                  $fecha=date("Y-m-d");
                  $salaDAO = new SalaDAO();
                  $salaDAO->ocupacionsala($id,$fecha);
               }
            ?>
         </div>
      </div>
      </br>
      <footer>
         <h5 style="font-size:15px;">© 2015-2020 Cotizador web desarrollado por: <a style="color:blue;">Toni Maestre Bayo</a></h5>
      </footer>
   </body>
</html>