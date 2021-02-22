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

// ================ Display the registration form =================

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
        <p>Должность: <select name='iFunction'>
            <option value='1'>Администратор</option>
            <option value='2'>Водитель</option>
            <option value='3'>Лучший пользователь</option>
            <option value='4'>Пользователь</option>
        </select></p>
        <input type='submit' value='Pегистр'>
      </form>      
    </body>
    </html>
");