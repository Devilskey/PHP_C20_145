<?php

//************************************
//Function of the file switch_demo.php:
// A demonstration of the switch statement
//Author: J. de Klijn
//Date of creation: 22 feb. 2021
//Last edited by: J. de Klijn @ 
//Version: v0.1
//*************************************

$iTestScore  = 7.4;

echo("Het resultaat van u toets was een: ".$iTestScore."<br/><br/>");

//if($iTestScore >= 8){
//  $sResultaat = "goed";
//}
//elseif($iTestScore >= 5.6){
//  $sResultaat = "voldoende";
//} else{
//  $sResultaat = "onvoldoende";
//}

switch($iTestScore){
    case 10: $sResultaat = "uitmuntend"; break;
    case 9: $sResultaat = "uitmuntend"; break;
    case 8: $sResultaat = "goed"; break;
    case 7: $sResultaat = "goed"; break;
    case 6: $sResultaat = "voldoende"; break;
    case 5: $sResultaat = "voldoende"; break;
    case 4: $sResultaat = "onvoldoende"; break;
    case 3: $sResultaat = "onvoldoende"; break;
    case 2: $sResultaat = "uitermate slecht en zeer teleurstellend resultaat"; break; 
    case 1: $sResultaat = "uitermate slecht en zeer teleurstellend resultaat"; break; 
    default: echo("Error number 320023.<hr/>"); $sResultaat="";
}

echo("U heeft daarmee een ".$sResultaat." voor u examen.");
