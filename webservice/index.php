<?php

$conn=mysqli_connect("localhost","root","nhk123","webservice");

$result=$conn->query("SELECT * FROM webservice");

$response = array();

while($data=mysqli_fetch_array($result)){
$response['number']=$data['number'];
array_push($response);
}

$result->close();

header('Content-Type: application/json');
echo json_encode($response);
?>