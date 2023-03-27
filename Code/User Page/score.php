<?php
$pagename="User Score"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=>"; //Call in stylesheet
echo "<title>".$pagename."</title>";
//display name of the page as window title
echo "<body>";
include ("Header.html");
//include header layout file
echo "<h4>".$pagename."</h4>";
//create a HTML form to capture the user's details
echo "<form method=post action=userscore.php>" ;
echo "<table style='border: 0px'>";
echo "<tr><td style='border: 0px'>GRE Score </td>";
echo "<td style='border: 0px'><input type=text name=r_grescore size=35></td></tr>"; // GRE Score
echo "<tr><td style='border: 0px'>TOEFL Score </td>";
echo "<td style='border: 0px'><input type=text name=r_toeflscore size=35></td></tr>"; //TOEFL Score
echo "<tr><td style='border: 0px'>SOP </td>";
echo "<td style='border: 0px'><input type=text name=r_sop size=35></td></tr>"; //SOP	
echo "<tr><td style='border: 0px'>LOR </td>";
echo "<td style='border: 0px'><input type=text name=r_lor size=35></td></tr>"; //LOR		
echo "<tr><td style='border: 0px'>CGPA </td>";
echo "<td style='border: 0px'><input type=text name=r_cgpa size=35></td></tr>"; //CGPA	
echo "<td style='border: 0px'><input type=reset value='Clear Score' name='submitbtn' id='submitbtn'> </td>";
echo "</tr>";
echo "</table>";
echo "</form>" ;
include("Footer.html");
//include head layout
echo "</body>";
?>