<?php

//************************************
//Function of the file functions_inc.php: the file with all nessesary functions.
//Author: J. de Klijn
//Date of creation: 28 apr. 2021
//Last edited by: J. de Klijn @ 
//Version: v0.1
//*************************************

function readJsonFile(){
  // Open the file in 'read' modus
  $JsonFile = fopen('Contacten.json','r');
  // Read the JSON array from the file
  $aJSONArray = file_get_contents('Contacten.json');
  // Convert to JSON array back to a PHP array
  $aRegistrationData = json_decode($aJSONArray,TRUE);
  // Close the file again
  fclose($JsonFile);
  // Send the fetched data back to the main programm
  return($aRegistrationData);
}

function writeJsonFile($aRegistrationData){
  // Use JSON to encode the array into a storeable string
  $aStoringArray = json_encode($aRegistrationData);
  // Open the file in 'write' modus
  $JsonFile = fopen('Contacten.json','w');
  // Save the content of the JSON array into the file
  file_put_contents('Contacten.json', $aStoringArray);
  // Close the file
  fclose($JsonFile);
  
}


