<?php

header('Access-Control-Allow-Origin');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, x-Request-With');

$requsetMethod = $_SERVER["REQUEST_METHOD"];

if($requsetMethod == "GET"){


}else{
    $data = [
        'status' => 405,
        'message' => $requsetMethod. 'Method not Allowed',
    ];
    header("HTTP/1.0 405 Method not Allowed");
    echo json_encode($data);
}

