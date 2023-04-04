<?php 
   session_start();
   include("../Login_and_Register_Pages/PHP/config.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Home</title>

        <link rel="stylesheet" href="../Result Page/Result.css">
    </head>
    <body>
        <label for="rating-range">Select rating range:</label>
        <form id="rating-form" method="GET">
            <select id="rating-range" name="rank" onchange="document.getElementById('rating-form').submit()">
                <option value="100-0">All</option>
                <option value="100-80">100 - 80</option>
                <option value="80-60">80 - 60</option>
                <option value="60-40">60 - 40</option>
                <option value="40-20">40 - 20</option>
                <option value="20-0">20 - 0</option>
            </select>
        </form>
        <?php
        $rank = $_GET['rank'];
        switch ($rank) {
            case '100-0':
                $min = 0.0;
                $max = 100.0;
                break;
            case '100-80':
              $min = 80.0;
              $max = 100.0;
              break;
            case '80-60':
              $min = 60.0;
              $max = 80.0;
              break;
            case '60-40':
              $min = 40.0;
              $max = 60.0;
              break;
            case '40-20':
              $min = 20.0;
              $max = 40.0;
              break;
            case '20-0':
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
            echo '<div class="percent" style="width: 56%"></div>';
            echo '</div>';
            echo '</div>';
        }

        mysqli_close($con);
        ?>
    </body>