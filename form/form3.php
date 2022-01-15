<?php
if(isset($_POST['text'])) { $text = $_POST['text'];}

echo "Cảm ơn bạn đã điền form! ";
echo "Bạn đã viết: ".$text;

function send($n)
{
    $username="root";
    $password="nhk123";
    $server="localhost";
    $dbname="form";
    
    $conn=mysqli_connect($server, $username, $password, $dbname);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    echo "<script> console.log('Connected successfully') </script>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $sql="INSERT INTO form (text) VALUES ('$n')";
    
        if ($conn->query($sql) === TRUE) {
            echo "<script> console.log('Thêm dữ liệu thành công') </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    $conn->close();
}
?>

<button onclick="send($text)">Gửi dữ liệu lên server</button>
<button onclick="history.back()">Chỉnh sửa</button>