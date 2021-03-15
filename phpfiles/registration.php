<?php

//************************************
// Function of the file registration.php:
// To show and handle the registration of a new user
// Author: J. de Klijn
// Date of creation: 8 feb. 2021
// Last edited by: J. de Klijn @ 
// Version: v0.1
//*************************************

// ========================== File saving ========================

// ======================== Form handling =======================
if(!empty($_POST)){                                                             // Check if the form is filled
    // Content of the post to a variable
    $sFirstname   =   $_POST['sFirstname'];                                       // Forminput fistname
    $sInsertion   =   $_POST['sInsertion'];                                       // Forminput insertion
    $sSurname     =   $_POST['sSurname'];                                         // Forminput surname
    $sStreetname  =   $_POST['sStreetname'];                                      // Forminput streetname
    $iHomenumber  =   $_POST['iHomenumber'];                                      // Forminput homenumber
    $sEmail       =   $_POST['sEmail'];                                           // Forminput email address
    $sUsername    =   $_POST['sUsername'];                                        // Forminput username
    $sPassword    =   $_POST['sPassword'];                                        // Forminput password
    $iFunction    =   $_POST['iFunction'];                                        // Forminput function
    
    // Fetch current JSON data content
    // Open the file in 'read' modus
    $JsonFile = open('JsonFile.json','r'); 
    // Read the JSON array from the file
    $aJSONArray = file_get_contents('JsonFile.json');
    // Convert to JSON array back to a PHP array
    $aFetchedArray = json_decode($aJSONArray,TRUE);
    // Close the file again            
    fclose($JsonFile);
    
    $iNumberOfRecords = count($aFetchedArray);
    $aRegistrationData = $aFetchedArray;
    // Content of the variables to an array.
    $aRegistrationData[$iNumberOfRecords] = array(); //Start an empty array
    $aRegistrationData[$iNumberOfRecords]['sFirstname']    = $sFirstname;
    $aRegistrationData[$iNumberOfRecords]['sInsertion']    = $sInsertion;
    $aRegistrationData[$iNumberOfRecords]['sSurname']      = $sSurname;
    $aRegistrationData[$iNumberOfRecords]['sStreetname']   = $sStreetname;
    $aRegistrationData[$iNumberOfRecords]['iHomenumber']   = $iHomenumber;
    $aRegistrationData[$iNumberOfRecords]['sEmail']        = $sEmail;
    $aRegistrationData[$iNumberOfRecords]['sUsername']     = $sUsername;
    $aRegistrationData[$iNumberOfRecords]['sPassword']     = $sPassword;
    $aRegistrationData[$iNumberOfRecords]['iFunction']     = $iFunction;
    var_dump($aRegistrationData);
    
    // Use JSON to encode the array into a storeable string
    $aStoringArray = json_encode($aRegistrationData);
    // Open the file in 'write' modus
    $JsonFile = fopen('JsonFile.json','w'); 
    // Save the content of the JSON array into the file
    file_put_contents('JsonFile.json', $aStoringArray);
    // Close the file
    fclose($JsonFile); 
    
    // Open the file in 'read' modus
    $JsonFile = fopen('JsonFile.json','r'); 
    // Read the JSON array from the file
    $aJSONArray = file_get_contents('JsonFile.json');
    // Convert to JSON array back to a PHP array
    $aFetchedArray = json_decode($aJSONArray,TRUE);
    // Close the file again            
    fclose($JsonFile);  
    echo("<hr/>");
    var_dump($aFetchedArray);


    






}


// ================ Display the registration form =================
//                      Admin        Manager       Main user              User        Guest
$aFunctions = array("Администратор","Водитель","Лучший пользователь","Пользователь");
$iTotalFunctions = count($aFunctions);
echo("
    <doctype html>
    <html>
    <head>
      <title>Форма регистрации</title>
    </head>
    <body>
      <h2>Форма регистрации</h2>
      <form autocomplete='off' method='post'>
        <p>Имя: <input type='text' name='sFirstname'></p>
        <p>вставка: <input type='text' name='sInsertion'></p>
        <p>Фамилия: <input type='text' name='sSurname'></p>
        <p>название улицы: <input type='text' name='sStreetname'></p>
        <p>номер дома: <input type='number' name='iHomenumber'></p>
        <p>Адрес электронной почты: <input type='text' name='sEmail'></p>
        <p>Имя пользователя: <input required type='text' name='sUsername'><br/>
        пароль: <input required type='password' name='sPassword'></p>
        <p>Должность: <select name='iFunction'>");
        for($iFunctionCounter = 0; $iFunctionCounter < $iTotalFunctions; $iFunctionCounter++){
          echo("<option value='".$iFunctionCounter."'>".$aFunctions[$iFunctionCounter]."</option>");
        }
echo("        </select></p>
        <input type='submit' value='Pегистр'>
      </form>      
    </body>
    </html>
");