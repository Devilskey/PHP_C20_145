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
  var_dump($_POST);
  $sFirstname   =   $_POST['sFirstname'];                                       // Forminput fistname
  $sInsertion   =   $_POST['sInsertion'];                                       // Forminput insertion
  $sSurname     =   $_POST['sSurname'];                                         // Forminput surname
  $sStreetname  =   $_POST['sStreetname'];                                      // Forminput streetname
  $iHomenumber  =   $_POST['iHomenumber'];                                      // Forminput homenumber
  $sEmail       =   $_POST['sEmail'];                                           // Forminput email address
  $sUsername    =   $_POST['sUsername'];                                        // Forminput username
  $sPassword    =   $_POST['sPassword'];                                        // Forminput password
  $iFunction    =   $_POST['iFunction'];                                        // Forminput function
}

echo("<hr/>");
//// keys                 0    1   2   3
//$aDemoArray = array("String",4,true,5.4);
//var_dump($aDemoArray);
//echo("<hr/>");
//echo($aDemoArray[3]);
//echo("<hr/>");
//$aColors = array(); // Declare an empty array for the colors
//$aColors['Green'] = "groen";
//$aColors['Red'] = "rood";
//$aColors['Blue'] = "blauw";
//$aColors['Purple'] = "paars";
//echo("<hr/>");
//echo("De kleur die u kiest is: ".$aColors['Blue']);
//echo("<hr/>");
//$aFruit = array("Appel","Banaan","Sinasappel","Mango","Kiwi","Framboos");
//var_dump($aFruit);
//
//for($iFruitCounter = 0;$iFruitCounter<=5;$iFruitCounter++){
//  echo("Het lekkerste fruit is de :".$aFruit[$iFruitCounter]."<br/>");
//}

$aNesting = array("key0","key1","key2","key3","key4","key5","key6");
$aContent = array("string",2341234,true,34.123,$aNesting);
//var_dump($aContent);

$aVolvo = array("Volvo","XC90","XC60","V90","V60","S90");
$aOpel = array("Opel","Corsa","Astra","Mokka","Zafira","Insignia");
$aTesla = array("Tesla","Model X","Roadster","Model S","Model 3","Model Y");
$aPeugot = array("Peugot","208","308","2008","508","206","608","3008","5008");
$aSmart = array("Smart","ForTwo","ForFour","Roadster");
$aCars = array($aVolvo,$aTesla,$aPeugot,$aOpel,$aSmart);
//var_dump($aCars);
echo("<hr>");
echo("Het model van mijn keuze is: ".$aCars[1][3]."<br/>");
foreach($aCars as $aModel){
    echo("Automerk: ".$aModel[0]."<br/>");
    $iModelCounter = count($aModel);
    echo("<select name='iCarType'>");
    for($iCarcounter = 1;$iCarcounter<$iModelCounter;$iCarcounter++){
        echo("<option value=".$iCarcounter.">".$aModel[$iCarcounter]."</option>");
    } // end for loop
    echo("</select><hr/>");
} // End foreach

echo("<hr/>");
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