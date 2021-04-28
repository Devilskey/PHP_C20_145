<?php

//************************************
// Function of the file index.php: 
// To show a form to login. To show a link to a registration form
// Author: J. de Klijn
// Date of creation: 8 feb. 2021
// Last edited by: J. de Klijn @ 
// Version: v0.1
//*************************************


// ==================== Form handling =====================


// ================ Display the login form =================

echo("
    <doctype html>
    <html>
    <head>
      <title>Aanmelden</title>
    </head>
    <body>
      <h2>Aanmelden verplicht</h2>
      <form autocomplete='off' method='post'>
        <p>Gebruikersnaam: <input required type='text' name='sUsername'><br/>
        Wachtwoord: <input required type='password' name='sPassword'></p>
        <input type='submit' value='Aanmelden'>
      </form>
      <!-- ========= Show a link to the registration page ========== -->
      <a href='./phpfiles/registration.php'><button>Registratie</button></a>
    </body>
    </html>
");




