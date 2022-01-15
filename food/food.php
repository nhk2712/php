<?php
$username="root";
$password="nhk123";
$server="localhost";
$dbname="food_ordering";

$conn=mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<script> console.log('Connected successfully') </script>";

$name="";
$pizza="";
$chicken="";
$coke="";
$address="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['name'])) { $name = $_POST['name']; }
    if(isset($_POST['pizza'])) { $pizza = $_POST['pizza']; }
    if(isset($_POST['chicken'])) { $chicken = $_POST['chicken']; }
    if(isset($_POST['coke'])) { $coke = $_POST['coke']; }
    if(isset($_POST['address'])) { $address = $_POST['address']; }

    $sql="INSERT INTO food (Name,Pizza,Chicken,Coke,Address) VALUES ('$name','$pizza','$chicken','$coke','$address')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> console.log('Thêm dữ liệu thành công') </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<head>
    <title>Cảm ơn bạn đã đặt hàng | Khanhfood</title>
    <link rel="shortcut icon" href="logofood.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="food2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body style="background-image: url('bg food.jpg')">
    <div name="thank">
        Khanhfood xin cảm ơn bạn đã đặt hàng! Chúc bạn ngon miệng!<br/>
        <button name="return" onclick="location.href='index.html'">Quay lại trang đặt hàng</button>
    </div>

</body>