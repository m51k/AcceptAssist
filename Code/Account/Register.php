<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcceptAssist - Login</title>
    <link rel="stylesheet" href="./Style/Register.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        .material-symbols-outlined {
            font-variation-settings:
            'FILL' 0,
            'wght' 200,
            'GRAD' 0,
            'opsz' 48
        }



        .footerArea {
            position: absolute;
            left: 0px;
            right: 0px;
            background-color: #474747;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0 0 0 0;
            padding: 30px 2% 30px 2%;
        }

            .ftColumn {
                align-items: center;
                justify-items: center;
                width: 20%;
            }

                #c1 a:hover {
                    transform: scale(115%);
                    transition: 0.4s;
                }

            #c2 {
                width: 30%;
            }

                .ftColumn div {
                    display: flex;
                    justify-content: center;
                }

                .ftColumn header {
                    display: flex;
                    justify-content: center;
                    margin-bottom: 20px;
                    font-size: 17px;
                }

                #c2 header {
                    margin-bottom: -10px;
                    font-size: 17px;
                }

                    .ftColumn a {
                        font-size: 13px;
                        margin-bottom: 10px;
                        text-decoration: none;
                        color: #fff;
                    }

                .ftColumn span{
                    display: flex;
                    justify-content: center;
                    font-size: small;
                    margin-bottom: 10px;
                }

                    #ftInput {
                        height: 40px;
                        width: 100%;
                        margin: 20px 0;
                        border: none;
                        outline: none;
                        border-radius: 35px;
                        padding: 0 0 0 45px;
                        /* background: rgba(255, 255, 255, 0.3); */
                    }

                        ::-webkit-input-placeholder {
                            color: black;
                        }

                        #ft_fa_mail {
                            position: relative;
                            top: 28px;
                            left: -91%;
                            color: rgba(103, 101, 101, 0.5);
                            
                        }

                    #ftSubmit {
                        border: none;
                        outline: none;
                        border-radius: 30px;
                        font-size: 16px;
                        height: 45px;
                        width: 40%;
                        background: rgba(255, 255, 255, .9);
                        cursor: pointer;
                        transition: 0.3s;
                    }

                        .ftSubmit [type="submit"] {
                            color: black;
                        }

                        #ftSubmit:hover {
                            box-shadow: 1px 5px 5px 1px rgba(0, 0, 0, 0.3);
                            transform: scale(110%);
                            background-color: rgba(193, 255, 70, 0.782);
                            transition: 0.4s;
                        }

                #c3 {
                    flex-direction: column;
                }

                .cIn {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                }

                    .cIn div {
                        margin-bottom: 5px;
                        font-size: 13px;
                    }

                .icon_links {
                    margin-top: 12px;
                    display: flex;
                    justify-content: center;
                    flex-direction: row;
                }

                    .addFT{
                        margin: 0 0 0 0;
                        padding: 5px 0 5px 0;
                        width: 40%;
                        display: flex;
                    }

                        .iconIns {
                            width: 110%;
                        }

                            .fa {
                                transform: scale(135%);
                            }

                        .iconIns a:hover {
                            transform: scale(150%);
                            transition: 0.3s;
                        }


                
        


    </style>
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