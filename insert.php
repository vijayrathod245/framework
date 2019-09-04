<?php
include 'db.php';
 
$name = $_POST['name'];
$email = $_POST['email'];
$status = $_POST['status'];
 
$sql = "INSERT INTO apidemo (`name`, `email`, `status`) VALUES ('$name', '$email', '$status');";
 
if ($conn->query($sql)) {
$msg = array("status" =>1 , "msg" => "Your record inserted successfully");
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
$json = $msg;
 
header('content-type: application/json');
echo json_encode($json);
 
 
@mysqli_close($conn);