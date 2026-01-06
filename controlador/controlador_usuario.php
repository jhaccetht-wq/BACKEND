<?php
require "../molde/molde_usuario.php";

function regristar_usuario($nombre, $password){
    $resultado = regristar_usuario_molde($nombre, $password);
    if ($resultado) {
        echo json_encode([
            "status" => "exito",
            "mensaje" => "regristo exitoso"
        ]);
    }else{
        echo json_encode([
            "status" => "error",
            "mensaje" => "regristo fallido"
        ]);
    }
}




?>