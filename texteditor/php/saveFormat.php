<?php
$conn = mysqli_connect('localhost','root','nhk123','texteditor');
$font = $_POST['font'];
$size = $_POST['size'];
$bold = $_POST['bold'];
$italic = $_POST['italic'];
$spellcheck = $_POST['spellcheck'];

session_start();

$sql="UPDATE content 
    SET font='".$font."',
        size='".$size."',
        bold='".$bold."',
        italic='".$italic."',
        spellcheck='".$spellcheck."'
    WHERE name='".$_SESSION['name']."'";
mysqli_query($conn,$sql);

$conn->close();
?>