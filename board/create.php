<?php
$new = $_POST['name'];
$pass = $_POST['password'];
$path = "/board"."/".$new."/"; 

if ($new == "") {
    echo "<script>history.back()</script>";
}

mkdir($new,0700);

$conn = mysqli_connect("localhost", "root", "nhk123", "board");
$sql = "INSERT INTO main (name,password,path) VALUES ('$new','$pass','$path')";

$query = mysqli_query($conn,$sql);

$file = fopen($path."index.php","x+");
$content = $new;
fwrite($file,$content);
fclose($file);

echo "<script>var go = document.getElementById('go');
go.onclick = function(){
    location.href = ".$path."
}
</script>"
?>

<button id="go">Go to board</button>