<?php
header('Access-Control-Allow-Origin');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, x-Request-With');

include('function.php');

$requsetMethod = $_SERVER["REQUEST_METHOD"];

if($requsetMethod == 'POST'){

    $inputData = json_decode(file_get_contents("php://input"), true);
   if(empty($inputData)){
       $storeCustomer = storeCustomer($_POST);
   }else{
       $storeCustomer = storeCustomer($inputData);
   }
    echo $storeCustomer;
}else{
    $data = [
        'status' => 405,
        'message' => $requsetMethod. ' Method not Allowed',
    ];
    header("HTTP/1.0 405 Method not Allowed");
    echo json_encode($data);
}
