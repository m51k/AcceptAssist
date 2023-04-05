<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcceptAssist - Login</title>
    <link rel="stylesheet" href="./Style/Register.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body style="background-image: url(./Resources/university-westminster_web.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    
    <div class="naviBar">
        <div class="naviContainer">
            <div class="naviLogo">
                <a href="../Start/start.html"><img src="./Resources/AcceptAssistWFTR.png" alt="" srcset="AcceptAssist Logo" class="naviImgLogo"></a>
            </div>

            <div class="naviListMenu">
                <div class="naviMenuItem"><a href="../Start/start.html">Home</a></div>
                <div class="naviMenuItem" class="naviDropdown">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Resources</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../UserPage/userscore.php">Get Predict</a></li>        <!-- Add link here -->
                        <li><a class="dropdown-item" href="../Universities_List/database.php">Universities List</a></li>  <!-- Add link here -->
                        <li><a class="dropdown-item" href="../Searching/Search.html">Search Universities</a></li>
                        </ul>
                    </li>
                </div> 
                <div class="naviMenuItem"><a href="../Start/start.html#team">Team</a></div>
                <div class="naviMenuItem"><a href="../Start/start.html#contact">Contact</a></div>
                <!-- <div class="naviMenuItem"><a href="#">Additional</a></div> add another option if needed -->
                <div class="naviMenuItem"><a href="/Code/Account/home.php"><i class="material-symbols-outlined">account_circle</i></a></div>
            </div>
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

                    // create the users table if it doesnt exist
                    $createTableQuery = "CREATE TABLE IF NOT EXISTS CREATE TABLE `Users` (
                        `ID` int(11) NOT NULL,
                        `Username` varchar(50) NOT NULL,
                        `FullName` varchar(300) NOT NULL,
                        `Email` varchar(200) NOT NULL,
                        `MobileNumber` int(11) DEFAULT NULL,
                        `Country` varchar(60) DEFAULT NULL,
                        `Password` varchar(150) NOT NULL
                    )";
                    mysqli_query($conn, $createTableQuery);

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

                    }
                    
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
            </div>
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