<?php
    session_start();


?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        about user:
        <?php
            echo $_SESSION['username'];
        ?>
    </body>
</html>