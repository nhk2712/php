<?php
$conn = mysqli_connect('localhost','root','nhk123','texteditor');
$txt = $_POST['txt'];

session_start();

$sql="UPDATE content SET content='".$txt."' WHERE name='".$_SESSION['name']."'";
mysqli_query($conn,$sql);

$conn->close();
?>