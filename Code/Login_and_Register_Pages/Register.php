<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AcceptAssist - Register</title>
    
    <link rel="stylesheet" href="./Style/Register.css">
    <script src="./Register.js"></script>

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
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Explore</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Logout</a></li>
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

        <!-- PHP code - take details in register page and save to database. -->
            <?php 

                include("PHP/config.php");
                if(isset($_POST['submit'])){
                     $fullName = $_POST['fullname'];
                     $username = $_POST['username'];
                     $email = $_POST['email'];
                     $phoneNo = $_POST['phoneNo'];
                     $country = $_POST['country'];
                     $password = $_POST['password'];

                     // verifing the email and username if already exsist

                     $verify_email = mysqli_query($con,"SELECT DB_Email FROM User_DB WHERE DB_Email='$email'");
                     $verify_username = mysqli_query($con,"SELECT DB_Username FROM User_DB WHERE DB_Username='$username'");

                     if(mysqli_num_rows($verify_email) != 0){
                        echo "<div class='phpMessage'>
                                  <p>Given email already in use, Try another One Please!</p>
                              </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='phpBtn'>Go Back</button>";
                     }

                        elseif(mysqli_num_rows($verify_username) != 0){
                        echo "<div class='phpMessage'>
                                  <p>Given Username already in use, Try another One Please!</p>
                              </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='phpBtn'>Go Back</button>";
                        }

                            else{
                                mysqli_query($con,"INSERT INTO User_DB(DB_Username, DB_Name, DB_Email, DB_PhoneNo, DB_Country, Password) VALUES('$username','$fullName','$email','$phoneNo','$country','$password')") or die("Error Occurred");

                                echo "<div class='phpMessage'>
                                        <p>Successfully Registered!</p>
                                      </div> <br>";
                                echo "<a href='./Login.php'><button class='phpBtn'>Login Now</button>";
                   
                            }
                        
                } else {
            
            ?>

            <!-- Register page HTML part -->
            <div class="container">
                <div class="top_header">
                    <span>Don't have an Account? Let's create new account...</span>
                    <header>Register</header>
                </div>

                <form action="" method="post">       <!-- Add action here -->
                    <div class="input_field">
                        <input type="text" name="fullname" class="input" placeholder="Full Name - Required" required>
                        <i class="material-symbols-outlined">badge</i>
                    </div>
    
                    <div class="input_field">
                        <input type="text" name="username" class="input" placeholder="Username - Required" required>
                        <i class="material-symbols-outlined">person</i>
                    </div>
    
                    <div class="input_field">
                        <input type="email" name="email" class="input" placeholder="Email - Required" required>
                        <i class="material-symbols-outlined">mail</i>
                    </div>
    
                    <div class="input_field">
                        <input type="tel" name="phoneNo" class="input" placeholder="Phone Number" pattern="07[0,1,6,7,5,2]{1} [0-9]{7}"  onkeyup="this.value=this.value.replace(/^(\d{3})(?=\d)/,'$1 ')">
                        <i class="material-symbols-outlined">call</i>
                    </div>
    
                    <div class="input_field">
                        <input type="text" name="country" class="input" placeholder="Country">
                        <i class="material-symbols-outlined">public</i>
                    </div>
    
                    <div class="input_field">
                        <input type="password" name="password" class="input" placeholder="Password - Required" minlength="8" autocomplete="off" required>
                        <i class="material-symbols-outlined">key</i>
                    </div>
    
                    <div class="input_field">
                        <input type="password" name="rePassword" class="input" placeholder="Confirm Password - Required" minlength="8" autocomplete="off" required>
                        <i class="material-symbols-outlined">key</i>
                    </div>
    
                    <div class="TnC">
                        <input type="checkbox" name="check" id="check" required>
                        <label for="check"> I have read and agree with <a href="">terms & conditions</a></label>    <!-- Add terms and conditions here -->
                    </div>
    
                    <div class="input_field">
                            <input type="submit" value="Sign up" class="submit">
                    </div>

                    <div class="bottom">
                        <div class="signin">
                            <label> Already have an account? <a href="./Login.php">Sign in</a></label>
                        </div>
                    </div>
    
                </form>
            </div>
            <?php } ?>
        </div>
    </div>

</body>
</html>