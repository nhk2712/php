<?php

session_start();

$conn=mysqli_connect("localhost","root","nhk123","webapp");

$sql="SELECT * FROM info";

$query=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="webapp.css">
    </head>

    <body>
        <div id="main">
            <?php
                while($data=mysqli_fetch_array($query)){
                    echo "<div class='tile' id='".$data['id']."'>".
                    "<img class='ava' src='ava/".$data['ava']."' width='40%'>".
                    "<label id='name'>".$data['name']."</label>".
                    "<br/>".
                    "<label id='producer'>".$data['producer']."</label>".
                    "<br/>".
                    "<label id='price'>".$data['price']."</label>".
                    "<br/>".
                    "</div>";
                };
            ?>
        </div>
        <script>

        </script>
    </body>
</html>