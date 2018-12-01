<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

// Get, traer todos los estudiantes
$app->get('/api/estudiantes', function(Request $req, Response $res) {
    
    $connection = new Conexion();
    $connect = $connection->get_conexion();

    try {
        $sql = "SELECT * FROM Estudiantes";
        $query = $connect->prepare($sql);
        $query->execute();

        if($query->rowCount() > 0){
            $data = $query->fetchAll();
            echo json_encode($data);
        } else {
            echo json_encode("No existen estudiantes en la BD.");
        }

    } catch (Exception $e) {
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }
});

// Get, traer informacion de un estudiante
$app->get('/api/estudiante/{id}', function(Request $req, Response $res) {
    
    $connection = new Conexion();
    $connect = $connection->get_conexion();

    $id = $req->getAttribute('id');

    try {
        $sql = "SELECT * FROM Estudiantes WHERE id=?";
	    $query = $connect->prepare($sql);
	    $data = [$id];
        $query->execute($data);

        if ($query->rowCount() > 0) {
            $infoEstdudiante = $query->fetch();
            echo json_encode([$infoEstdudiante]);    
        } else {
            echo json_encode("No existen estudiante en la BD con este ID.");
        }
    } catch (Exception $e) {
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }

});

//POST, crear un estudiante
$app->post('/api/estudiantes/nuevo', function(Request $req, Response $res) {
    
    $connection = new Conexion();
    $connect = $connection->get_conexion();

    $cedula = $req->getParam('cedula');
    $nombres = $req->getParam('nombres');
    $apellidos = $req->getParam('apellidos');
    $telefono = $req->getParam('telefono');
    $correo = $req->getParam('correo');

    try {
        $sql = "INSERT INTO Estudiantes (cedula,nombres,apellidos,telefono,correo) VALUES (?,?,?,?,?)";
        $query = $connect->prepare($sql);
        $data = [$cedula, $nombres, $apellidos, $telefono, $correo];
        $query->execute($data);
        echo json_encode("Se guardo el nuevo estudiante");
    } catch (Exception $e) {
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }
});

// PUT, actualiza datos de un estudiante
$app->put('/api/estudiantes/update/{id}', function(Request $req, Response $res) {

    $connection = new Conexion();
    $connect = $connection->get_conexion();

    $id = $req->getAttribute('id');
    $cedula = $req->getParam('cedula');
    $nombres = $req->getParam('nombres');
    $apellidos = $req->getParam('apellidos');
    $telefono = $req->getParam('telefono');
    $correo = $req->getParam('correo');

    try {
        $sql = "UPDATE Estudiantes SET cedula=?, nombres=?, apellidos=?, telefono=?,correo=? WHERE id=?";
        $query = $connect->prepare($sql);
        $data = [$cedula, $nombres, $apellidos, $telefono, $correo, $id];
        $query->execute($data);
        
        echo json_encode("Se actulizaron los datos del estudiante");
    } catch (Exception $e) {
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }
});

//Delete, borrar un estudiante
$app->delete('/api/estudiantes/destroy/{id}', function(Request $req, Response $res) {

    $connection = new Conexion();
    $connect = $connection->get_conexion();

    $id = $req->getAttribute('id');

    try {
        $sql = "DELETE FROM Estudiantes WHERE id=?";
	    $query = $connect->prepare($sql);
	    $data = [$id];
        $query->execute($data);

        if ($query->rowCount() > 0) {
            echo json_encode("Estudiante eliminado.");  
        } else {
            echo json_encode("No existe estudiante con este ID.");
        }
    } catch (Exception $e) {
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }
});