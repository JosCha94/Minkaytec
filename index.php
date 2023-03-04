<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: X-Requested-With');
header('Content-Type: application/json');

// Conecta a la base de datos con PDO

// -------------CON LA CONECCION EN EL MISMO ARCHIVO ----------------------------

// -------------------------------------------------------------------

// ------------------ CON LA CONECCION EN UN ARCHIVO APARTE --------------------------
include_once 'conexion.php';
// --------------------------------------------------------------------
$conexion = new conexion;
$conexion = $conexion->conectar();

// Consulta datos

// -------- CON SP -------------
// $sql = "CALL SP_alumnos_todos";

// --------- CON SENTENCIA SQL -----------------
// $sql = "SELECT * FROM empleados";

// $consulta = $conexion->prepare($sql);
// $consulta->execute();
// $empleaados = $consulta->fetchAll(PDO::FETCH_ASSOC);
// echo json_encode($empleaados);



if (isset($_GET["insertar"])) {
    $data = json_decode(file_get_contents("php://input"));
    $nombres = $data->nombres;
    $apellidos = $data->apellidos;
    $tipo_documento = $data->tipo_documento;
    $numero_documento = $data->numero_documento;
    $telefono = $data->telefono;
    $correo = $data->correo;
    $password = $data->password;

    if (($nombres != "") && ($apellidos != "") && ($tipo_documento != "") && ($numero_documento != "") && ($telefono != "") && ($correo != "") && ($password != "")) {

        $consulta = $conexion->prepare("INSERT INTO usuarios(nombres,apellidos,tipo_documento,numero_documento,telefono,correo,password) VALUES(:valor1,:valor2,:valor3,:valor4,:valor5,:valor6,:valor7) ");
        $consulta->bindParam(':valor1', $nombres);
        $consulta->bindParam(':valor2', $apellidos);
        $consulta->bindParam(':valor3', $tipo_documento);
        $consulta->bindParam(':valor4', $numero_documento);
        $consulta->bindParam(':valor5', $telefono);
        $consulta->bindParam(':valor6', $correo);
        $consulta->bindParam(':valor7', $password);
        $consulta->execute();
        echo json_encode(["success"=>1]);
    }
    exit();
}

?>
