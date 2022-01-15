<?php
session_start();

$name=$_SESSION['name'];
$dob=$_SESSION['dob'];
$school=$_SESSION['school'];
$phone=$_SESSION['phone'];
$email=$_SESSION['email'];
$fb=$_SESSION['fb'];
$exp=$_SESSION['exp'];
$why=$_SESSION['why'];

session_destroy();

$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];

$username="root";
$password="nhk123";
$server="localhost";
$dbname="tuyenmem";

$conn=mysqli_connect($server,$username,$password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<script> console.log('Connected successfully') </script>";

$sql="INSERT INTO hc (Ten,DOB,Truonglop,SDT,Email,FB,Kinhnghiem,Taisao,CH1,CH2,CH3,CH4,CH5) VALUES ('$name','$dob','$school','$phone','$email','$fb','$exp','$why','$q1','$q2','$q3','$q4','$q5')";

if ($conn->query($sql) === TRUE) {
    echo "<script> console.log('Thêm dữ liệu thành công') </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

include 'done.html';
?>