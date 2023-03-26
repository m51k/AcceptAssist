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
$fname=trim($_POST['r_grescore']);
$lname=trim($_POST['r_toeflscore']);
$address=trim($_POST['r_sop']);
$postcode=trim($_POST['r_lor']);
$telno=trim($_POST['r_cgpa']);

;
// GRE Score	TOEFL Score	University Rating	SOP	LOR	CGPA	Research	Chance of Admit

include("Footer.html");
//include head layout
echo "</body>";
?>