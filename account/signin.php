<?php
session_start();

$conn=mysqli_connect("localhost","root","nhk123","account");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    //Truy vấn dữ liệu
    $sql = "SELECT * from account WHERE username='$username' and password='$password'";
    $query=mysqli_query($conn,$sql); //hoặc $conn->query($sql)

    //Check username và pass
    $num_rows = mysqli_num_rows($query);
    if ($num_rows==0) {
        die(include 'wrong.html');
    }

    $_SESSION['username']=$username;

    echo "<script>location.href='home.php'</script>";
}
?>