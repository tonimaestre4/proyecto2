<!DOCTYPE html>
<html lang="es">
   <meta charset=UTF-8>
   <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Colorlib Templates">
        <meta name="author" content="Colorlib">
        <meta name="keywords" content="Colorlib Templates">

        <!-- Title Page-->
        <title>Reserva | Toni Maestre Bayo</title>

        <!-- Icons font CSS-->
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <!-- Font special for pages-->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Vendor CSS-->
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
   </head>
   <body>
      <?php
         require_once '../controller/sessionController.php';
        //  session_start();
        $dni=$_SESSION['DNI_empleado'];
         ?>
      <!-- Aqui mostramos la pagina principal dodne vemos todas las salas y las estadisticas-->
      <div style="padding-left: 11%;">
         <h3 style="color:#0ea4fb;">Panel de control</h3>
         <h5 style="color:#717981;"><a style="text-decoration:none;color:#69bcfb;" href="../view/zona.admin.php">Inicio</a> > Reservar</h5>
      </div>
      <div style="padding-right: 33%;">
      <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title--style-4">Reservar Mesa</h2>
                    <form action="../options/reserva.php" method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                            <input type="hidden" id="id_mesa" name="id_mesa" value="<?php echo $_REQUEST['id_mesa']?>">
                                <div class="input-group">
                                    <label class="label--style-4">Nombre</label>
                                    <input class="input--style-4" type="text" name="nombre_ocupacion">
                                </div>
                            </div>
                            <div class="col-2">
                            <div class="input-group">
                                    <label class="label--style-4">DNI del Empleado</label>
                                    <input class="input--style-4" type="text" name="DNI_empleado" value="<?php echo $dni ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label--style-4">Fecha de reserva</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="fecha_ocupacion" value="<?php echo $_REQUEST['fecha_ocupacion']?>" readonly>
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                            <div class="input-group">
                                    <label class="label--style-4">Número de Mesa</label>
                                    <input class="input--style-4" type="text" name="id_mesa" value="<?php echo $_REQUEST['id_mesa']?>" readonly>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label--style-4">Hora de reserva</label>
                                    <select class="select--style-4" name="franja_ocupacion" id="franja_ocupacion">
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
                                    </select> 
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
      </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
                       