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

        <title>AcceptAssist</title>

        <link rel="stylesheet" href="./Style/User_Page.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>


    <body>

        <div class="page">

            <div class="naviBar">
                <div class="naviContainer">
                    <div class="naviLogo">

                    </div>

                    <div class="naviListMenu">
                        <div class="naviMenuItem"><a href="#">Home</a></div>
                        <div class="naviMenuItem" class="naviDropdown">
                            <button class="naviDropbtn">Resources 
                            <i class="fa fa-caret-down"></i>
                            </button>
                            <!-- <div class="dropdown-content">
                            <div class="dropdownItem"><a href="#">Get Prediction</a></div>
                            <div class="dropdownItem"><a href="#">Search Universities</a></div>
                            </div> -->
                        </div> 
                        <div class="naviMenuItem"><a href="#">About</a></div>
                        <div class="naviMenuItem"><a href="#">Contact</a></div>
                        <div class="naviMenuItem"><a href="/Code/Login_and_Register_Pages/PHP/logout.php">Logout</a></div>
                        <div class="naviMenuItem"><a href="/Code/Login_and_Register_Pages/home.php"><i class="material-symbols-outlined">account_circle</i></a></div>
                    </div>
                </div>
            </div>

            <div class="homePageContent">

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

                <div class="container">

                    <div class="leftPart">

                        <div class="profile">

                            <div class="dp">
                                <div class="profilePhoto">
                                    <span class="material-symbols-outlined" id="dp">account_circle</span>
                                </div>
                            </div>

                            <div class="data">
                                <div class="singleData">
                                    <div class="icon"><span class="material-symbols-outlined">badge</span></div>
                                    : <b><?php echo $res_fullName ?></b>
                                </div>
                                <div class="singleData">
                                    <div class="icon"><span class="material-symbols-outlined">email</span></div>
                                    : <b><?php echo $res_Email ?></b>
                                </div>
                                
                                <div class="singleData">
                                    <div class="icon"><span class="material-symbols-outlined">call</span></div>
                                    : <b><?php echo $res_mobileNo ?></b>
                                </div>

                                <div class="singleData">
                                    <div class="icon"><span class="material-symbols-outlined">public</span></div>
                                    : <b><?php echo $res_country ?></b>
                                </div>

                                <div class="singleData" id="lgoutBtn">
                                    <div class="logoutBtn"><a href="php/logout.php">Logout</a></div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="rightPart">

                        <div class="topPart">

                            <div class="summary">
                                <div class="contentSum">
                                    <h1>
                                        <p>Hello <b><?php echo $res_Username ?></b>
                                        </p>
                                    </h1>
                                    <p class="sumDiscrip">We provide your university admission predictions based on based on GRE Score, TOEFL Score and CGPA</p>
                                </div>
                            </div>

                        </div>

                        <div class="bottomPart">

                            <div class="history">

                                <div class="discrip">

                                    <h2>Looking For History</h2>
                                    <p>Here we have your recent 5 history. Let's check it.</p>
                                    
                                </div>

                                <div class="listHistory">

                                    <div class="singleHistoryContent">

                                        <div class="historyData">

                                        </div>

                                    </div>

                                    <div class="singleHistoryContent">

                                        <div class="historyData">

                                        </div>
                                        
                                    </div>

                                    <div class="singleHistoryContent">

                                        <div class="historyData">

                                        </div>
                                        
                                    </div>

                                    <div class="singleHistoryContent">

                                        <div class="historyData">

                                        </div>
                                        
                                    </div>

                                    <div class="singleHistoryContent">

                                        <div class="historyData">

                                        </div>
                                        
                                    </div>
                                    

                                </div>

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

        </div>
        
    </body>
</html>