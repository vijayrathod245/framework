<?php

header("Content-type: application/json");

$method = $_SERVER['REQUEST_METHOD'];

switch($method){
    case 'GET':
    handleGetOpretion();
    break;

    case 'POST':
    echo "post recived";
    break;

    case 'PUT':
    echo "put recived";
    break;

    case 'DELETE':
    echo "delete recived";
    break;

    default:
    echo "Not Supported?";
    break;
}


function handleGetOpretion(){
    include "db.php";
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $rows = array();
        while($r = mysqli_fetch_assoc($result)){
            $rows["result"][] = $r;
        }
        echo json_encode($rows);
    }
    else{
        echo '{"result": "not data found"}';
    }
}