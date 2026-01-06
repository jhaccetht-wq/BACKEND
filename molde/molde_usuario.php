<?php


require "../conexion.php";


function regristar_usuario_molde($nombre, $password)
{


    global $conn;
    $encriptar = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO prueba( nombre, contrasena) VALUES (?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $nombre, $password);

    if (mysqli_stmt_execute($stmt)) {
        return true;
    } else {
        return false;
    }
}
