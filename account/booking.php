<?php
    session_start();

    $conn=mysqli_connect("localhost","root","nhk123","account");
    $sql = "SELECT * from account";
    $query=mysqli_query($conn,$sql);
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
            <p id="title">Booking</p>
            
            <div id="main">
                <?php
                    while($data=mysqli_fetch_array($query)) {
                        if($data['product']!=""){
                            if ($data['status']=="avai"){
                                echo "<div class='product' >".
                                "<div class='product-wrapper'>".
                                "<p class='info-name'> From: ".$data['username']."</p>".
                                "<p class='info-product'> Product: ".$data['product']."</p>".
                                "</div>".
                                "<div class='but-wrapper'>".
                                "<button class='but' id='avai'>Book</button>".
                                "<button class='but' name='info' id='".$data['id']."'>More info</button>".
                                "</div>".
                                "</div>";
                            }

                            if ($data['status']=="book"){
                                echo "<div class='product' >".
                                "<div class='product-wrapper'>".
                                "<p class='info-name'> From: ".$data['username']."</p>".
                                "<p class='info-product'> Product: ".$data['product']."</p>".
                                "</div>".
                                "<div class='but-wrapper'>".
                                "<button class='but' id='book'>Booked</button>".
                                "<button class='but' name='info' id='".$data['id']."'>More info</button>".
                                "</div>".
                                "</div>";
                            }
                        }
                    }
                ?>

<script>
    var k=[];    
</script>

<?php
for ($i = 1; $i <10;$i++)
{
    echo "<script>
    k[".$i."]=String(".$i.");
    document.getElementById(k[".$i."]).onclick=function(){
        location.href=k[".$i."]+'.html';
    }
    </script>";
}
?>

<style>
.product-wrapper{
    float:left;
}

.but-wrapper{
    float:right;
    display: block;
    width:120px;
}

.but{
    margin: 0px 10px 5px 0px;
    padding: auto;
    border-radius: 5px;
    font-size:15px;
    width: 90px;
    height:30px;
    border:none;
}

#avai{
    background-color:rgb(169, 13, 241);
    color:white;
    cursor: pointer;
    transition:500ms;
}

#avai:hover{
    background-color:rgb(138, 13, 196);
}

#avai:active{
    background-color:rgb(113, 9, 161);
}

#book{
    background-color:lightgrey;
    color:grey;
    cursor:not-allowed;
}

button[name="info"]{
    border:1px solid rgb(169, 13, 241);
    color:rgb(169, 13, 241);
    background-color: white;
    transition:500ms;
    cursor: pointer;
}

button[name="info"]:hover{
    background-color:rgb(214, 213, 213);
}

button[name="info"]:active{
    background-color:rgb(182, 182, 182);
}
</style>

                <div class="product" style="background:none; cursor:default">
                    <p class="info-name"></p>
                    <p class="info-product"></p>
                </div>
            </div>
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

<style>
.product{
    background-color:lavender;
    height: fit-content;
    border-radius:10px;
    padding:15px 0px 15px 20px;
    margin: auto;
    margin-bottom: 15px;
    transition: 500ms;
}

.info-name{
    font-size: 17px;
    font-weight:lighter;
    margin: 0px;
    padding:0px;
    margin-bottom:5px;
}

.info-product{
    font-size: 20px;
    margin: 0px;
    padding:0px;
}

@media all and (max-width:768px){ /*tablet and mobile */
    .product{
        width:95%;
    }
}

@media all and (min-width:769px){ /*pc */
    .product{
        width:45%;
    }
}

#main{
    display: flex;
    flex-wrap: wrap;
    
    
}
</style>
    </body>
</html>