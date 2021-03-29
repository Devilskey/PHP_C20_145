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
      <title>Зарегистрироваться</title>
    </head>
    <body>
      <h2>Пожалуйста, зарегистрируйтесь</h2>
      <form autocomplete='off' method='post'>
        <p>Имя пользователя: <input required type='text' name='sUsername'><br/>
        пароль: <input required type='password' name='sPassword'></p>
        <input type='submit' value='Зарегистрироваться'>
      </form>
      <!-- ========= Show a link to the registration page ========== -->
      <a href='./phpfiles/registration.php'><button>Pегистр</button></a>
    </body>
    </html>
");




