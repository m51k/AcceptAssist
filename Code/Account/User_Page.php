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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>    
    </head>


    <body>

        <div class="page">

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
                                    <p class="sumDiscrip">We provide your university admission predictions based on GRE Score, TOEFL Score and CGPA</p>
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