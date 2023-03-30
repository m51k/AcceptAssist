<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcceptAssist - Login</title>
    <link rel="stylesheet" href="./Style/Register.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body style="background-image: url(./Resources/university-westminster_web.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">

    <div id="navBar" style="position: fixed; width: 100vw; margin-top: -9.3%;">
        <div id="navBarLi">
            <header id="navHeader">
                <!-- <div id="navLogoArea">
                    <img class="webLogo" src="./westminster-img.png" alt="Web page logo">
                </div> -->
                <nav id="naviNav">
                    <ul class="navLinks">
                        <li><a href="Home.php">Home</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Explore</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="./PHP/logout.php">Logout</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <div id="navLogoArea">
            <a href="#"><img class="webLogo" src="./Resources/westminster-img.png" alt="Web page logo"></a>
        </div>
    </div>

    <div id="RegisterPage">       <!-- Backgroung Picture in this div-->
        <div id="RegisterBox">     <!-- Login box area -->
            <div class="container">

                <div class="top_header">
                    <span>Don't have an Account? Let's create new account...</span>
                    <header>Register</header>
                </div>

                <!-- PHP Code For login user -->
                <?php 
                    
                    include("php/config.php");
                    if(isset($_POST['submit'])){
                        $name = $_POST['name'];
                        $username = $_POST['username'];
                        $email = $_POST['email'];
                        $phoneNo = $_POST['phoneNo'];
                        $country = $_POST['country'];
                        $password = $_POST['password'];
                        $rePassword = $_POST['rePassword'];

                    //verifying the unique email

                    $verify_query = mysqli_query($con,"SELECT Username FROM Users WHERE Username='$username'");

                    if(mysqli_num_rows($verify_query) !=0 ){
                        echo "<div class='message'>
                                <p>This Username is used, Try another One Please!</p>
                            </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                    }

                    elseif ($password != $rePassword) {
                        echo "<div class='message'>
                                <p>Password and Confirmed Password doesn't Matched</p><br>
                                <p>Please Try Again</p>
                            </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                    }

                    else{

                        mysqli_query($con,"INSERT INTO Users(FullName,Username,Email,MobileNumber,Country,Password) VALUES('$name','$username','$email','$phoneNo','$country','$password')") or die("Erroe Occured");

                        echo "<div class='message'>
                                <p>Registration successfully!</p>
                            </div> <br>";
                        echo "<a href='Login.php'><button class='btn'>Login Now</button>";
                    

                    }

                    }else{
                    
                ?>

                    <form action="" method="post">

                        <div class="input_field">
                            <input type="text" name="name" id="name" autocomplete="off" class="input" placeholder="Full Name - Required" required>
                            <i class="material-symbols-outlined">badge</i>
                        </div>

                        <div class="input_field">
                            <input type="text" name="username" id="username" autocomplete="off" class="input" placeholder="Username - Required" required>
                            <i class="material-symbols-outlined">person</i>
                        </div>

                        <div class="input_field">
                            <input type="email" name="email" id="email" autocomplete="off" class="input" placeholder="Email - Required" required>
                            <i class="material-symbols-outlined">mail</i>
                        </div>

                        <div class="input_field">
                            <input type="tel" name="phoneNo" id="phoneNo" autocomplete="off" class="input" placeholder="Phone Number" pattern="07[0,1,6,7,5,2]{1}[0-9]{7}">
                            <i class="material-symbols-outlined">call</i>
                        </div>

                        <div class="input_field">
                            <input type="text" name="country" id="country" autocomplete="off" class="input" placeholder="Country">
                            <i class="material-symbols-outlined">public</i>
                        </div>
                        
                        <div class="input_field">
                            <input type="password" name="password" id="password" autocomplete="off" class="input" placeholder="Password - Required" minlength="8" required>
                            <i class="material-symbols-outlined">key</i>
                        </div>

                        <div class="input_field">
                            <input type="password" name="rePassword" id="rePassword" autocomplete="off" class="input" placeholder="Confirm Password - Required" minlength="8" required>
                            <i class="material-symbols-outlined">key</i>
                        </div>

                        <div class="TnC">
                            <input type="checkbox" name="check" id="check" required>
                            <label for="check"> I have read and agree with <a href="">terms & conditions</a></label>    <!-- Add terms and conditions here -->
                        </div>

                        <div class="input_field">
                            <input type="submit" class="submit" name="submit" value="Sign up" required>
                        </div>
                    </form>

                    <div class="bottom">
                        <div class="signin">
                            <label> Already have an account? <a href="./Login.php">Sign in</a></label>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>

</body>
</html>