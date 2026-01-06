<?php
 require "../controlador/controlador_usuario.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header('Content-Type: application/json');


$method =  $_SERVER['REQUEST_METHOD'];

$data = json_decode(file_get_contents('php://input'), true);

switch ($method) {
    case 'POST':
        if (!empty($data["nombre"]) && !empty($data["password"]) ) {
            $nombre = $data['nombre'];
            $password = $data["password"];
            $resultado= regristar_usuario($nombre, $password);   
          return $resultado; 

        }else{
            echo json_encode([
                "status" => "error",
                "mensaje" => "faltan credenciales"
            ]);
        }
        
        
        break;

        case "GET":
            echo 'es un metodo get';
            break;
    default:
        echo "metodo no encontrado"; 
        break;
}

?>