<?php 
   session_start();

   include("../Account/PHP/config.php");
   if(!isset($_SESSION['valid'])) {
    header("Location: Login.php");
   }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userscore.css">
    <title>AcceptAssist - Enter Scores</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-image: url(./Resources/ScorePage.png); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
<div class="naviBar">
    <div class="naviContainer">
        <div class="naviLogo">
            <a href="../Start/start.html"><img src="../Account/Resources/AcceptAssistWFTR.png" alt="" srcset="AcceptAssist Logo" class="naviImgLogo"></a>
        </div>

            <div class="naviListMenu">
                <div class="naviMenuItem"><a href="../Start/start.html">Home</a></div>
                <div class="naviMenuItem" class="naviDropdown">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Resources</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../UserPage/userscore.php">Get Predict</a></li>        <!-- Add link here -->
                        <li><a class="dropdown-item" href="../Universities_List/database.php">Universities List</a></li>  <!-- Add link here -->
                        <li><a class="dropdown-item" href="../Searching/SearchResult.php">Search Universities</a></li>
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
    <div id=scoreBox>
        <form id="score_form" action="../Result/Result.php" method="POST">
            <div class="input_field">
            <label for="r_grescore">GRE Score:</label>
            <input type="text" id="r_grescore" name="r_grescore"><br><br>
            </div>

            <div class="input_field">
            <label for="r_toeflscore">TOEFL Score:</label>
            <input type="text" id="r_toeflscore" name="r_toeflscore"><br><br>
            </div>

            <div class="input_field">
            <label for="r_sop">SOP:</label>
            <input type="text" id="r_sop" name="r_sop"><br><br>
            </div>

            <div class="input_field">
            <label for="r_lor">LOR:</label>
            <input type="text" id="r_lor" name="r_lor"><br><br>
            </div>

            <div class="input_field">
            <label for="r_cgpa">CGPA:</label>
            <input type="text" id="r_cgpa" name="r_cgpa"><br><br>
            </div>

            <div class="input_field">
            <label for="r_research">Research:</label>
            <input type="text" id="r_research" name="r_research"><br><br>
            </div>

            <div class="input_field">
            <input type="submit" name="submit" value="Submit">
            </div>
        </form>
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
