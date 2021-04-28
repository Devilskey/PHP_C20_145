<?php

//************************************
// Function of the file registration.php:
// To show and handle the registration of a new user
// Author: J. de Klijn
// Date of creation: 8 feb. 2021
// Last edited by: J. de Klijn @ 
// Version: v0.1
//*************************************

include('./functions_inc.php');


// ========================== File saving =======================

if(!empty($_POST)){                                                             // Check if the form is filled  
  // Fill the array with the returned data of the readJsonFile.
  $aRegistrationData = readJsonFile();

// ======================== Form handling =======================
    
  // If empty file create new values
  if(empty($aRegistrationData)){
    $aRegistrationData = array();
    $iArrayCount = 0;
  } else{
    // Count the current number of records in the array
    $iArrayCount = count($aRegistrationData);
  }
// ======================== Form handling =======================

    $sFirstname   =   $_POST['sFirstname'];                                       // Forminput fistname
    $sInsertion   =   $_POST['sInsertion'];                                       // Forminput insertion
    $sSurname     =   $_POST['sSurname'];                                         // Forminput surname
    $sStreetname  =   $_POST['sStreetname'];                                      // Forminput streetname
    $iHomenumber  =   $_POST['iHomenumber'];                                      // Forminput homenumber
    $sEmail       =   $_POST['sEmail'];                                           // Forminput email address
    $sUsername    =   $_POST['sUsername'];                                        // Forminput username  
    $iFunction    =   $_POST['iFunction'];                                        // Forminput function
    // Create a new array for this registration
    $aRegistrationData[$iArrayCount] = array($sFirstname,$sInsertion,$sSurname,$sStreetname,$iHomenumber,$sEmail,$sUsername,$iFunction);
    // Write the new registation array content to the JSON file
    writeJsonFile($aRegistrationData);
}  
 
// ================ Display the registration form =================
//                      Admin        Manager       Main user              User        Guest
$aFunctions = array("Beheerder","Gebruiker","VIP gebruiker","Gast");
$iTotalFunctions = count($aFunctions);
echo("
    <!doctype html>
    <html>
    <head>
      <title>Registratie</title>
    </head>
    <body>
      <p><a href='./editusers.php'>Bewerken gebruikers</a></p><hr/>
      <h2>Nieuwe registratie</h2>
      <form autocomplete='off' method='post'>
        <p>Voornaam: <input type='text' name='sFirstname'></p>
        <p>Tussenvoegsel: <input type='text' name='sInsertion'></p>
        <p>Achternaam: <input type='text' name='sSurname'></p>
        <p>Straat: <input type='text' name='sStreetname'></p>
        <p>Huisnummer: <input type='number' name='iHomenumber'></p>
        <p>E-mail: <input type='text' name='sEmail'></p>
        <p>Gebruikersnaam: <input required type='text' name='sUsername'><br/>        
        <p>Functie: <select name='iFunction'>");
        for($iFunctionCounter = 0; $iFunctionCounter < $iTotalFunctions; $iFunctionCounter++){
          echo("<option value='".$iFunctionCounter."'>".$aFunctions[$iFunctionCounter]."</option>");
        }
echo("        </select></p>
        <input type='submit' value='Verzend'>
      </form>      
    </body>
    </html>
");