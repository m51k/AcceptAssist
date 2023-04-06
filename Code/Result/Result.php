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
    <title>Result Tab</title>
    <link rel="stylesheet" href="Result.css">
    <link rel="stylesheet" href="navbarFooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<?php
function apiCall($endpoint, $data) {
    $init = curl_init();

    curl_setopt_array($init, array(
        CURLOPT_URL => $endpoint,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_RETURNTRANSFER => true
      ));

      $response = curl_exec($init);

      curl_close($init);

      return $response;
}

function prediction($uni_rating) {
    if(isset($_POST['submit'])) {
        $userScores = array(
            'r_grescore' => trim($_POST['r_grescore']),
            'r_toeflscore' => trim($_POST['r_toeflscore']),
            'r_rating' => $uni_rating,
            'r_sop' => trim($_POST['r_sop']),
            'r_lor' => trim($_POST['r_lor']),
            'r_cgpa' => trim($_POST['r_cgpa']),
            'r_research' => trim($_POST['r_research'])
        );
    
        $url = 'http://localhost:8000/api/acceptance-prediction/';
        $prediction = apiCall($url, $userScores);
    
        $prediction = number_format($prediction*100,2).'%';
    
        echo "<p>$prediction</p>";
    }
}
$nameQuery = "SELECT Name FROM university_rankings WHERE Rank = 1 LIMIT 1";
$uniNames = mysqli_query($con, $nameQuery);
?>

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
    <hr>
    <h1>Prediction Results</h1>
    <h3>University Acceptance Prediction Results for Universities Ranked 1 to 5</h3>  

    <div class="main">
        <!-- this can be improved by using a for loop with php to generate these blocks of code recursively-->
        <a href="../Universities_List/database.php?rank=1">
            <div class="card card-5">
                <div class="text">Rank 1 Universities</div>
                <p class="card__apply">
                    <a class="card__link" href="#"></i></a> <!-- university website link-->
                </p>
                <br>
                <div class="text">   Rank in Country - <!-- world rank -->
                    <br><div class="text">World Rank - </div> <!-- work rank -->
                    <div class="percent-number">Predict Percentage - 
                        <?php prediction(1) ?>
                    </div>
                </div>
            </div>
        </a>
        <a href="../Universities_List/database.php?rank=2">
            <div class="card card-5">
                <div class="text">Rank 2 Universities</div>
                <p class="card__apply">
                    <a class="card__link" href="#"></i></a> <!-- university website link-->
                </p>
                <br>
                <div class="text">   Rank in Country - <!-- work rank -->
                    <br><div class="text">World Rank - </div> <!-- work rank -->
                    <div class="percent-number">Predict Percentage - 
                        <?php prediction(2) ?>
                    </div>
                </div>
            </div>
        </a>

        <a href="../Universities_List/database.php?rank=3">
            <div class="card card-5">
                <div class="text">Rank 3 Universities</div>
                <p class="card__apply">
                    <a class="card__link" href="#"></i></a> <!-- university website link-->
                </p>
                <br>
                <div class="text">   Rank in Country - <!-- work rank -->
                    <br><div class="text">World Rank - </div> <!-- work rank -->
                    <div class="percent-number">Predict Percentage - 
                        <?php prediction(3) ?>
                    </div>
                </div>
            </div>
        </a>

        <a href="../Universities_List/database.php?rank=4">
            <div class="card card-5">
                <div class="text">Rank 4 Universities</div>
                <p class="card__apply">
                    <a class="card__link" href="#"></i></a> <!-- university website link-->
                </p>
                <br>
                <div class="text">   Rank in Country - <!-- work rank -->
                    <br><div class="text">World Rank - </div> <!-- work rank -->
                    <div class="percent-number">Predict Percentage - 
                        <?php prediction(4) ?>
                    </div>
                </div>
            </div>
        </a>

        <a href="../Universities_List/database.php?rank=1">
            <div class="card card-5">
                <div class="text">Rank 5 Universities</div>
                <p class="card__apply">
                    <a class="card__link" href="#"></i></a> <!-- university website link-->
                </p>
                <br>
                <div class="text">   Rank in Country - <!-- work rank -->
                    <br><div class="text">World Rank - </div> <!-- work rank -->
                    <div class="percent-number">Predict Percentage - 
                        <?php prediction(5) ?>
                    </div>
                </div>
            </div>
        </a>
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