<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcceptAssist - Login</title>
    <link rel="stylesheet" href="./Style/Login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body style="background-image: url(./Resources/UoWBG.png); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">

    <div class="naviBar">
        <div class="naviContainer">
            <div class="naviLogo">
                <a href="#"><img src="./Resources/AcceptAssistWFTR.png" alt="" srcset="AcceptAssist Logo" class="naviImgLogo"></a>
            </div>

            <div class="naviListMenu">
                <div class="naviMenuItem"><a href="#">Home</a></div>
                <div class="naviMenuItem" class="naviDropdown">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Resources</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Get Predict</a></li>
                          <li><a class="dropdown-item" href="#">Universities List</a></li>
                          <li><a class="dropdown-item" href="#">Search Universities</a></li>
                        </ul>
                      </li>
                </div> 
                <div class="naviMenuItem"><a href="#">About</a></div>
                <div class="naviMenuItem"><a href="#">Contact</a></div>
                <div class="naviMenuItem"><a href="#">Additional</a></div> <!-- add another option if needed -->
                <div class="naviMenuItem"><a href="/Code/Account/home.php"><i class="material-symbols-outlined">account_circle</i></a></div>
            </div>
        </div>
    </div>

    <div id="logingPage">       <!-- Backgroung Picture in this div-->
        <div id="loginBox">     <!-- Login box area -->
            <div class="container">
                <div class="top_header">
                    <span>Have an account ? Let's login...</span>
                    <header>Login</header>
                </div>

                <!-- PHP Code For login user -->
                <?php 
                
                include("php/config.php");
                if(isset($_POST['submit'])){
                    $username = mysqli_real_escape_string($con,$_POST['username']);
                    $password = mysqli_real_escape_string($con,$_POST['password']);

                    $result = mysqli_query($con,"SELECT * FROM Users WHERE Username='$username' AND Password='$password' ") or die("Select Error");
                    $row = mysqli_fetch_assoc($result);

                    if(is_array($row) && !empty($row)){
                        $_SESSION['valid'] = $row['Username'];
                        $_SESSION['email'] = $row['Email'];
                        $_SESSION['fullName'] = $row['FullName'];
                        $_SESSION['mobileNo'] = $row['MobileNumber'];
                        $_SESSION['country'] = $row['Country'];
                        $_SESSION['id'] = $row['ID'];
                    }else{
                        echo "<div class='message'>
                        <p>Wrong Username or Password</p>
                        </div> <br>";
                    echo "<a href='Login.php'><button class='btn'>Go Back</button>";
            
                    }
                    if(isset($_SESSION['valid'])){
                        header("Location: home.php");
                    }

                }else{

                
                ?>
                
                <form action="" method="post">
                    <div class="input_field">
                        <input type="text" name="username" id="username" autocomplete="off" placeholder="Username" class="input" required>
                        <i class="material-symbols-outlined">person</i>
                    </div>

                    <div class="input_field">
                        <input type="password" name="password" id="password" autocomplete="off" placeholder="Password" minlength="8" class="input" required>
                        <i class="material-symbols-outlined">key</i>
                    </div>

                    <div class="TnC">
                        <input type="checkbox" name="check" id="check" required>
                        <label for="check"> I have read and agree with <a href="">terms & coditions</a></label>  <!-- Add terms and conditions -->
                    </div>

                    <div class="input_field">
                        <input type="submit" class="submit" name="submit" value="Login" required>
                    </div>
                </form>

                <!-- If bottom div needed to show in the user not found message add " php } " here -->

                <div class="bottom">
                    <div class="register">
                        <label> Don't have an account? <a href="./Register.php">Sign Up</a></label>
                    </div>
                </div>

            </div>

            <?php } ?>
            
        </div>
    </div>

    <footer>
        <div class="footerArea">
            <div class="ftColumn" id="c1">
                <header>USEFUL LINKS</header>

                <div><a href="#">Home</a></div>                <!-- Add Link Here-->
                <div><a href="#">Resoucers</a></div>           <!-- Add Link Here-->
                <div><a href="#">About</a></div>               <!-- Add Link Here-->
                <div><a href="#">Contact</a></div>             <!-- Add Link Here-->
            </div>

            <div class="ftColumn" id="c2">
                <span>Get Late's news...</span>
                <header>NEWSLETTER</header>

                <form action="#">
                    <div class="ftInput">
                        <input type="email" name="ftEmail" id="ftInput" placeholder="Enter Your Email Here">
                        <i class="material-symbols-outlined" id="ft_fa_mail"> mail </i>
                    </div>
                    <div class="ftSubmit">
                        <input type="submit" value="Subscribe Now" id="ftSubmit">
                    </div>
                </form>
            </div>

            <div class="ftColumn" id="c3">
                <header>CONTACT</header>

                <div class="cIn">
                    <div>Team Backout,</div> 
                    <div>No.10, Trelawney Place, </div>
                    <div>Colombo 04, </div>
                    <div>Sri Lanka. </div>
                </div>

                <div class ="icon_links">
                    <div class="addFT">
                        <div class="iconIns">
                            <a href="#">                <!-- Add instagram Link Here-->
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>

                        <div class="iconIns">
                            <a href="#">                <!-- Add facebook Link Here-->
                                <i class="fa fa-facebook"></i>
                            </a>
                        </div>

                        <div class="iconIns">
                            <a href="#">                <!-- Add Twitter Link Here-->
                                <i class="fa fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </footer>

</body>
</html>