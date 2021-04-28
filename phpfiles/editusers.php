<?php

//************************************
// Function of the file editusers.php:
// Show the forms to change users information
// Author: J. de Klijn
// Date of creation: 8 feb. 2021
// Last edited by: J. de Klijn @ 
// Version: v0.1
//*************************************

include('./functions_inc.php');

// ============ File handling ================


// =============== Form handling ============


// ============= Edit users functions =========



// ======== Display users list ================
$aAllUsers = readJsonFile();
echo("<table width='90%' border='1'>");
foreach($aAllUsers as $aUser){
  echo("<tr><td>".$aUser[0]."</td><td>".$aUser[1]."</td><td>".$aUser[2]."</td><td>".$aUser[3]."</td><td>".$aUser[4]."</td><td>".$aUser[5]."</td><td>".$aUser[6]."</td><td>".$aUser[7]."</td>");
  echo("<td>Bewerk</td><td>Verwijder</td></tr>");
} // End foreach
echo("</table>");

