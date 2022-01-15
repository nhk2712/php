<?php
$conn=mysqli_connect("localhost","root","nhk123","account");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT username from account WHERE username='$username'";
$query = mysqli_query($conn, $sql);

$row=mysqli_num_rows($query);

if ($row!=0){
    die(include 'supdec.html');
}

$id="";

for ($i=1; $i<100; $i++){
    $sql2="SELECT id from account WHERE id='$i'";
    $query2=mysqli_query($conn,$sql2);

    $row2=mysqli_num_rows($query2);

    if ($row2==0){
        $id=(string)$i;
        break;        
    }
}

$sql3="INSERT INTO account (username,password,id) VALUES ('$username','$password','$id')";
$query3=mysqli_query($conn,$sql3);

session_start();
$_SESSION['username']=$username;

echo "<script>location.href='home.php'</script>";
?>