<?php
require_once 'sala.php';

class salaDAO{
    private $pdo;

    public function __construct(){
        include '../controller/conexion.php';
        $this->pdo=$pdo;
    }

    public function elegirsala($sala){
        $query= "SELECT * FROM tbl_sala WHERE id_sala=?";
        $sentencia=$this->pdo->prepare($query);
        $id=$sala->getId_sala();
        $sentencia->bindParam(1,$id);
        $sentencia->execute();
        $sala=$sentencia->fetch(PDO::FETCH_ASSOC);
        echo "<p style='font-size:20px; margin:0;margin-top:16px;margin-left: 25px;color:#717981;'>".$sala['nombre_sala']."</p>";
        $query1= "SELECT COUNT(id_mesa) as 'total' , (SELECT COUNT(id_mesa) FROM tbl_mesa WHERE id_sala = ? )FROM tbl_mesa WHERE id_sala=?";
        $sentencia1=$this->pdo->prepare($query1);
        $sentencia1->bindParam(1,$id);
        $sentencia1->bindParam(2,$id);
        $sentencia1->execute();
        $ocupacion=$sentencia1->fetch(PDO::FETCH_ASSOC);
        // $disponible=$ocupacion['total']-$ocupacion['ocupadas'];
        // echo "<p style='font-size:15px; margin:0;margin-top:7px;margin-left: 25px;color:#717981;'>Mesas disponibles: ".$disponible."</p>";
        // $porcentaje=($ocupacion['ocupadas']*100)/$ocupacion['total'];
        // if ($porcentaje==0) {
        //     echo "<div class='divbarra'>";
        //     echo "<div  style='width:".round($porcentaje)."%;'>".round($porcentaje)."%</div>";
        //     echo "</div>";
        // } else {
        //     echo "<div class='divbarra'>";
        //     echo "<div class='barra' style='width:".round($porcentaje)."%;'>".round($porcentaje)."%</div>";
        //     echo "</div>";
        // }
        

    }

    public function nombresala($sala){
        $query= "SELECT * FROM tbl_sala WHERE id_sala=?;";
        $sentencia=$this->pdo->prepare($query);
        $id=$sala->getId_sala();
        $sentencia->bindParam(1,$id);
        $sentencia->execute();
        $sala=$sentencia->fetch(PDO::FETCH_ASSOC);
        //print_r($total);
        echo "<h3 style='color:#0ea4fb;'>".$sala['nombre_sala']."</h3>";
        echo "<h5 style='color:#717981;'><a style='text-decoration:none;color:#69bcfb;' href='zona.admin.php'>Inicio</a> > ".$sala['nombre_sala']."</h5>";
        
    }

    public function ocupacionsala($sala,$fecha){
        // $query= "SELECT tbl_ocupacion.* , tbl_empleado.nombre_empleado, tbl_sala.nombre_sala, tbl_mesa.id_mesa, tbl_mesa.capacidad_mesa FROM `tbl_ocupacion` INNER JOIN tbl_empleado ON tbl_ocupacion.DNI_empleado=tbl_empleado.DNI_empleado INNER JOIN tbl_mesa ON tbl_ocupacion.id_mesa=tbl_mesa.id_mesa
        // INNER JOIN tbl_sala ON tbl_mesa.id_sala=tbl_sala.id_sala WHERE tbl_sala.id_sala=? ORDER BY tbl_mesa.id_mesa ASC";
        // $sentencia=$this->pdo->prepare($query);
        $id=$sala;
        // $sentencia->bindParam(1,$id);
        // $sentencia->execute();
        // $sala=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        // //print_r($total);
        // echo "<table>";
        //     echo "<tr>";
        //         echo "<th>#</th>";
        //         echo "<th>Empleado</th>";
        //         echo "<th>Sala</th>";
        //         echo "<th>Mesa</th>";
        //         echo "<th>Nº Personas</th>";
        //         echo "<th>Fecha</th>";
        //         echo "<th>Hora Inicial</th>";
        //         echo "<th>Estado</th>";
        //         echo "<th>Cerrar</th>";
        //     echo "</tr>";
            
        // foreach($sala as $salas) {
        //     echo "<tr>";
        //         echo "<td>".$salas['id_ocupacion']."</td>";
        //         echo "<td>".$salas['nombre_empleado']."</td>";
        //         echo "<td>".$salas['nombre_sala']."</td>";
        //         echo "<td>".$salas['id_mesa']."</td>";
        //         echo "<td>".$salas['capacidad_mesa']."</td>";
        //         echo "<td>".$salas['fecha_ocupacion']."</td>";
        //         // echo "<td>".$salas['hora_inicio']."</td>";
        //         // echo "<td>".$salas['ocupacion_mesa']."</td>";
        //         echo "<td><a href='../controller/ocupaciones.php?id_ocupacion=".$salas['id_ocupacion']."&mesa=".$salas['id_mesa']."'><img src='../img/borrar.png' alt='Borrar' style='width:30px;heigth:30px;'></img></a></td>";
        //         echo "</tr>";
        // }  
        // echo "</table>";
        // echo "</br>";
        // $query1= "SELECT COUNT(tbl_mesa.id_mesa) as 'mesas' FROM tbl_mesa INNER JOIN tbl_sala ON tbl_mesa.id_sala=tbl_sala.id_sala WHERE tbl_sala.id_sala=? ;";
        // $sentencia1=$this->pdo->prepare($query1);
        // $sentencia1->bindParam(1,$id);
        // $sentencia1->execute();
        // $sala1=$sentencia1->fetch(PDO::FETCH_ASSOC);
        // switch ($sala1['mesas']) {
        //     case 3:
        //         echo "<div class='fondo3'>";
        //     break;
        //     case 4:
        //         echo "<div class='fondo4'>";
        //     break;
        //     case 5:
        //         echo "<div class='fondo5'>";
        //     break;
        // }
        echo '<br>';
        echo "<div class='fondo5'>";
        $query= "SELECT tbl_mesa.* FROM tbl_mesa INNER JOIN tbl_sala ON tbl_mesa.id_sala=tbl_sala.id_sala WHERE tbl_sala.id_sala=? ORDER BY tbl_mesa.id_mesa ASC;";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->bindParam(1,$id);
        $sentencia->execute();
        $sala=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        
                $cont=0;
                foreach($sala as $salas) {
                $cont++;
                $id=$salas['id_mesa'];
                
                switch ($cont) {
                    case 1:
                        echo "<div class='four-column-mesa'><a href='../view/reservas.php?id_mesa=".$id."&fecha_ocupacion=".$fecha."'><img class='imagen' src='../img/mesaverde.png'></img>";
                            echo "<p>Mesa ".$id." | ".$salas['capacidad_mesa']." P</p>";
                            echo "</a></div>";                        
                        
                    break;
                    case 2:
                        echo "<div class='four-column-mesa'><a href='../view/reservas.php?id_mesa=".$id."&fecha_ocupacion=".$fecha."'><img class='imagen' src='../img/mesaverde.png'></img>";
                            echo "<p>Mesa ".$id." | ".$salas['capacidad_mesa']." P</p>";
                            echo "</a></div>";                        
                        
                    break;
                    case 3:
                        echo "<div class='four-column-mesa'><a href='../view/reservas.php?id_mesa=".$id."&fecha_ocupacion=".$fecha."'><img class='imagen' src='../img/mesaverde.png'></img>";
                            echo "<p>Mesa ".$id." | ".$salas['capacidad_mesa']." P</p>";
                            echo "</a></div>";                         
                    break;
                    case 4:
                        echo "<div class='four-column-mesa'><a href='../view/reservas.php?id_mesa=".$id."&fecha_ocupacion=".$fecha."'><img class='imagen' src='../img/mesaverde.png'></img>";
                        echo "<p>Mesa ".$id." | ".$salas['capacidad_mesa']." P</p>";
                        echo "</a></div>";
                    break;
                    case 5:
                        echo "<div class='four-column-mesa'><a href='../view/reservas.php?id_mesa=".$id."&fecha_ocupacion=".$fecha."'><img class='imagen' src='../img/mesaverde.png'></img>";
                            echo "<p>Mesa ".$id." | ".$salas['capacidad_mesa']." P</p>";
                            echo "</a></div>";
                        break;
                }
                
            }echo "</div>";
            echo "</br>";
    }
}
?>