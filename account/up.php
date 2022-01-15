<?php
session_start();

$username=$_SESSION['username'];
$product=$_POST['product'];

$conn=mysqli_connect("localhost","root","nhk123","account");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="UPDATE account SET product='$product' WHERE username='$username'";
$query=mysqli_query($conn,$sql);

$sql2="SELECT id FROM account WHERE username='$username'";
$query2=mysqli_query($conn,$sql2);
while($data=mysqli_fetch_array($query2)){
    $id=$data['id'];
}

$file=fopen($id.'.html','x');

$txt="Product: ".$product;
fwrite($file,$txt);
fclose($file);

echo "<script>location.href='home.php'</script>"
?>