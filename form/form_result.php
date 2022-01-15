<?php
$username="root";
$password="nhk123";
$server="localhost";
$dbname="form";

$conn=mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<script> console.log('Connected successfully') </script>";

$text="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['text'])) { $text = $_POST['text']; }

    $sql="INSERT INTO form (text) VALUES ('$text')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> console.log('Thêm dữ liệu thành công') </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>