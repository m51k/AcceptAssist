<?php
session_start();
include('db.php');
mysqli_report(MYSQLI_REPORT_OFF);
$pagename="User Score"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=>"; //Call in stylesheet
echo "<title>".$pagename."</title>";
//display name of the page as window title
echo "<body>";
include ("Header.html");
//include header layout file
echo "<h4>".$pagename."</h4>";
//Capture and trim the 7 inputs entered in the the 7 fields of the form using the $_POST superglobal variable
//Store these details into a set of 7 new local variables

function postUserScores($url, $data) {
    $init = curl_init();

    curl_setopt_array($init, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
      ));

      $response = curl_exec($init);

      curl_close($init);

      return $response;
}

// $greScore=trim($_POST['r_grescore']);
// $toeflScore=trim($_POST['r_toeflscore']);
// $sop=trim($_POST['r_sop']);
// $lor=trim($_POST['r_lor']);
// $cgpa=trim($_POST['r_cgpa']);

$userScores = array(
    'r_grescore' => trim($_POST['r_grescore']),
    'r_toeflscore' => trim($_POST['r_toeflscore']),
    'r_sop' => trim($_POST['r_sop']),
    'r_lor' => trim($_POST['r_lor']),
    'r_cgpa' => trim($_POST['r_cgpa'])
);
// GRE Score	TOEFL Score	University Rating	SOP	LOR	CGPA	Research	Chance of Admit

include("../Navigation Bar & Footer/Footer.html");
//include head layout
echo "</body>";
?>