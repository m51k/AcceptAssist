<?php 
   session_start();
   include("../Account/PHP/config.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>AcceptAssist - University List</title>

        <link rel="stylesheet" href="../Result/Result.css">
        <link rel="stylesheet" href="database.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
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
        <label for="rating-range">Select rating range:</label>
        <form id="rank-form" method="GET">
            <select id="rating-range" name="rank" onchange="document.getElementById('rank-form').submit()">
                <option>Select Rank to Display</option>
                <option value="0" selected>All</option>
                <option value="1">100 - 80</option>
                <option value="2">80 - 60</option>
                <option value="3">60 - 40</option>
                <option value="4">40 - 20</option>
                <option value="5">20 - 0</option>
            </select>
        </form>
        <?php
        $rank = isset($_GET['rank']) ? $_GET['rank'] : 0;
        switch ($rank) {
            case '0':
                $min = 0.0;
                $max = 100.0;
                break;
            case '1':
              $min = 80.0;
              $max = 100.0;
              break;
            case '2':
              $min = 60.0;
              $max = 80.0;
              break;
            case '3':
              $min = 40.0;
              $max = 60.0;
              break;
            case '4':
              $min = 20.0;
              $max = 40.0;
              break;
            case '5':
              $min = 0.0;
              $max = 20.0;
              break;
            default:
              $min = 0.0;
              $max = 100.0;
              break;
        }

        $uniQuery = "SELECT Name, Rating, Rank, Locations FROM university_rankings WHERE Rating BETWEEN $min AND $max";
        $result = mysqli_query($con, $uniQuery);

        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['Name'];
            $rating = $row['Rating'];
            $rank = $row['Rank'];
            $location = $row['Locations'];
        
            // Generate HTML for this university
            echo '<div class="card card-5">';
            echo '<div class="text">' . $name . '</div>';
            echo '<br>';
            echo '<div class="text">Rating - ' . $rating . '</div>';
            echo '<br><div class="text">World Rank - ' . $rank . '</div>';
            echo '<br><div class="text">Location - ' . $location . '</div>';
            echo '<div class="level">';
            echo '</div>';
            echo '</div>';
        }

        mysqli_close($con);
        ?>
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