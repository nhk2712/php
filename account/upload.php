<?php
session_start();

$username=$_SESSION['username'];

$conn=mysqli_connect("localhost","root","nhk123","account");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT product FROM account WHERE username='$username'";
$query=mysqli_query($conn,$sql);

while($data=mysqli_fetch_array($query)){
    if($data[0]!=""){
        die(include 'updec.html');
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="home.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="header">
            <div id="logo">Khanhs web</div>
            <div id="acc">
                User:
                <?php
                    echo $_SESSION['username'];
                ?>
            </div>
        </div>

        <dialog id="box">
            <div class="tile"></div>
            
            <div class="tile" id="profile">
                <svg id="tile-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                Profile
            </div>

            <div class="tile" onclick="location.href='/account'">
                <svg id="tile-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg>
                Sign out
            </div>

            <div class="tile" id="close">
                <svg id="tile-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                  </svg>
                Close
            </div>
        </dialog>


        <div class="middle">
            <form name="upload" method="post" action="up.php">
                <label>Product name:</label>
                <input name="product" type="text">
                <button>Up</button>
            </form>
        </div>

        <script>
            document.getElementById('acc').onclick=function(){
                document.getElementById('box').show();
            }

            document.getElementById('close').onclick=function(){
                document.getElementById('box').close();
            }

            document.getElementById('profile').onclick=function(){
                location.href="profile.php";
            }
        </script>

    </body>
</html>