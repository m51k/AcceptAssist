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
    <hr>
    <h1>Prediction Results</h1>
    <h3>University Acceptance Prediction Results for Universities Ranked 1 though 5</h3>  

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
                    <div class="level">
                        <div class="percent" style="width: 56%"></div>
                    </div>
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
                    <div class="level">
                        <div class="percent" style="width: 56%"></div>
                    </div>
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
                    <div class="level">
                        <div class="percent" style="width: 56%"></div>
                    </div>
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
                    <div class="level">
                        <div class="percent" style="width: 56%"></div>
                    </div>
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
                    <div class="level">
                        <div class="percent" style="width: 56%"></div>
                    </div>
                    <div class="percent-number">Predict Percentage - 
                        <?php prediction(5) ?>
                    </div>
                </div>
            </div>
        </a>
</body>
</html>