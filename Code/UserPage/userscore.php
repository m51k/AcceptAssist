<?php
session_start();
$pagename="User Score"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=User.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>";
//display name of the page as window title
echo "<body>";
//include header layout file
echo "<h4>".$pagename."</h4>";
//Capture and trim the 7 inputs entered in the the 7 fields of the form using the $_POST superglobal variable
//Store these details into a set of 7 new local variables
?>

<form action="../Result/Result.php" method="POST">
    <label for="r_grescore">GRE Score:</label>
    <input type="text" id="r_grescore" name="r_grescore"><br><br>

    <label for="r_toeflscore">TOEFL Score:</label>
    <input type="text" id="r_toeflscore" name="r_toeflscore"><br><br>

    <label for="r_sop">SOP:</label>
    <input type="text" id="r_sop" name="r_sop"><br><br>

    <label for="r_lor">LOR:</label>
    <input type="text" id="r_lor" name="r_lor"><br><br>

    <label for="r_cgpa">CGPA:</label>
    <input type="text" id="r_cgpa" name="r_cgpa"><br><br>

    <label for="r_research">Research:</label>
    <input type="text" id="r_research" name="r_research"><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "</body>";
?>