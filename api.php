<?php
// Definir los encabezados de respuesta para permitir solicitudes desde cualquier origen
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Datos de usuario
$userData = [
    "message" => "Registro obtenido correctamente",
    "code" => 2,
    "data" => [
        "id" => 79,
        "name" => "Jose",
        "lastname" => "Venteño",
        "avatar" => "https://crud.jonathansoto.mx/storage/users/avatars/",
        "email" => "4kro54k@gmail.com",
        "phone_number" => "6122384208",
        "created_by" => "4KRO5",
        "role" => "Administrador",
        "created_at" => "2023-10-23T22:12:44.000000Z",
        "updated_at" => "2023-10-23T22:12:44.000000Z",
        "token" => "379|kD1c9lc1alxhwfRsKUa8t9v9dSLD6ySE7NriyICh"
    ],
    "errors" => null
];

// Capturar la solicitud HTTP
$request_method = $_SERVER['REQUEST_METHOD'];

// Ruta para obtener los datos del usuario
if ($request_method === "GET") {
    echo json_encode($userData);
} else {
    http_response_code(404); // Método no permitido
    echo json_encode(["message" => "Método no permitido"]);
}