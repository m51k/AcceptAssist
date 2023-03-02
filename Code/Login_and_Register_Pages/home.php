<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: Login.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Home</title>

        <link rel="stylesheet" href="style/style.css">
    </head>


    <body>
        <div class="userBody">

            <div class="right-links">

                <?php 
                
                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Username = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_fullName = $result['FullName'];
                    $res_mobileNo = $result['MobileNumber'];
                    $res_country = $result['Country'];
                    $res_id = $result['ID'];
                }
                
                ?>

                <a href="php/logout.php"> <button class="btn">Log Out</button> </a>

            </div>
        </div>
        <main>

        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b><?php echo $res_Username ?></b>, Welcome</p>
                </div>
                <div class="box">
                    <p>Your email is <b><?php echo $res_Email ?></b>.</p>
                </div>
            </div>
            <div class="bottom">
                <div class="box">
                    <p>And you are <b><?php echo $res_fullName ?></b>.</p> 
                </div>

                <div class="box">
                    <p>And you are mobile number<b><?php echo $res_mobileNo ?></b>.</p> 
                </div>

                <div class="box">
                    <p>And you are country<b><?php echo $res_country ?></b>.</p> 
                </div>

                <div class="box">
                    <p>And you are ID <b><?php echo $res_id ?></b>.</p> 
                </div>
            </div>
        </div>

        </main>
    </body>
</html>