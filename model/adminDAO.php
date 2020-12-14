<?php
class AdminDao{
    private $pdo;

    public function __construct(){
        include '../controller/conexion.php';
        $this->pdo=$pdo;
    }

    public function eliminarUsuario($DNI_empleado){
        $query= "DELETE FROM tbl_empleado WHERE DNI_empleado=?";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->bindParam(1,$DNI_empleado);
        $sentencia->execute();
    }

    public function getlistaUsuarios(){
        $query = "SELECT * FROM tbl_empleado";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();
        $result=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function modificarEmpleado(){
    try {
        $DNI=$_REQUEST['DNI_empleado'];
        $nombre=$_REQUEST['nombre_empleado'];
        $apellido1=$_REQUEST['apellido1_empleado'];
        $apellido2=$_REQUEST['apellido2_empleado'];
        $tipo=$_REQUEST['tipo_empleado'];
        echo $DNI;
        echo $nombre;
        echo $apellido1;
        echo $apellido2;
        echo $tipo;
        $this->pdo->beginTransaction();
        // $query= "UPDATE tbl_empleado SET `nombre_empleado`= ?, `apellido1_empleado`=?, `apellido2_empleado`=?, `tipo_empleado`=? WHERE `DNI_empleado`='43345611R';";
        $query= "UPDATE tbl_empleado SET nombre_empleado = ?, apellido1_empleado = ?, apellido2_empleado = ?, tipo_empleado = ? WHERE DNI_empleado=?";
        // $query= "UPDATE tbl_empleado SET `nombre_empleado`= ? WHERE `DNI_empleado`='43345611R';";
        //$query= "UPDATE tbl_empleado(nombre_empleado,DNI_empleado) VALUES(?,?)";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->bindParam(1,$nombre);
        $sentencia->bindParam(2,$apellido1);
        $sentencia->bindParam(3,$apellido2);
        $sentencia->bindParam(4,$tipo);
        $sentencia->bindParam(5,$DNI);
        
        $sentencia->execute();


        $query = "SELECT * FROM tbl_empleado";
        // echo $nombre_empleado;
        // echo $apellido1_empleado;
        // echo $apellido2_empleado;
        // echo $tipo_empleado;
        // echo $DNI_empleado;
        // return $query;
        $sentencia2=$this->pdo->prepare($query);
        $sentencia2->execute();
        $listausuarios=$sentencia2->fetchAll(PDO::FETCH_ASSOC);
        echo $query;
        $this->pdo->commit();
    } catch (Exception $ex) {
        $this->pdo->rollback();
        echo $ex->getMessage();
    }
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

// foreach($listausuarios as $usuario){
//     echo "<tr>";
//     echo "<td>{$usuario['DNI_empleado']}</td>";
//     echo "<td>{$usuario['nombre_empleado']}</td>";
//     echo "<td>{$usuario['apellido1_empleado']}</td>";
//     echo "<td>{$usuario['tipo_empleado']}</td>";
//     echo "<td><a href='../options/modificar.php?DNI_empleado={$usuario['DNI_empleado']}&nombre_empleado={$usuario['nombre_empleado']}&apellido1_empleado={$usuario['apellido1_empleado']}&apellido2_empleado={$usuario['apellido2_empleado']}&tipo_empleado={$usuario['tipo_empleado']}'>Modificar<a></td>";
//     echo "<td><a href='../options/eliminar.php?DNI_empleado={$usuario['DNI_empleado']}'>Eliminar<a></td>";
//     echo "</tr>";
// }
}
}

    // $query= "UPDATE `tbl_empleado` SET `apellido1_empleado` = ? WHERE `DNI_empleado` = ?;";
    // $sentencia=$this->pdo->prepare($query);
    // $sentencia->bindParam(1,$apellido1_empleado);
    // $sentencia->bindParam(2,$DNI_empleado);
    // $sentencia->execute();
    // $query= "UPDATE `tbl_empleado` SET `apellido2_empleado` = ? WHERE `DNI_empleado` = ?;";
    // $sentencia=$this->pdo->prepare($query);
    // $sentencia->bindParam(1,$apellido2_empleado);
    // $sentencia->bindParam(2,$DNI_empleado);
    // $sentencia->execute();
    // $query= "UPDATE `tbl_empleado` SET `tipo_empleado` = ? WHERE `DNI_empleado` = ?;";
    // $sentencia=$this->pdo->prepare($query);
    // $sentencia->bindParam(1,$tipo_empleado);
    // $sentencia->bindParam(2,$DNI_empleado);
    // $sentencia->execute();
    // $query= "UPDATE `tbl_empleado` SET `password_empleado` = ? WHERE `DNI_empleado` = ?;";
    // $sentencia=$this->pdo->prepare($query);
    // $sentencia->bindParam(1,$password_empleado);
    // $sentencia->bindParam(2,$DNI_empleado);
    // $sentencia->execute();


?>