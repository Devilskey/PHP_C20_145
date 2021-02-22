<?php
  if(!empty($_POST)){ // TRUE
    //var_dump($_POST);
    $dDelivery = $_POST['dDelivery'];
    echo("<h3>Bedankt voor u bestelling.</h3><br/>");
    echo("U bestelling wordt bezorgt op: ".$dDelivery."<br/><hr/>");
  } else{// FALSE
    echo("U bent vergeten een formulier in te vullen");
  }
  
  $sDateFieldContent = date('D d M Y');
  echo($sDateFieldContent."<hr/>");

  $iNumberOne = 125;
  $iNumberTwo = 67;
  $bSuccess = false;
  $sColor = "Blue";

  // == === != >= <= > <  &&  || 

  //      FALSE  OF     FALSE      =  FALSE
  if(($sColor == "green")||($sColor == "yellow")){ 
    echo($sColor);      
  } else{
    echo("Red");
  }
  echo("<hr/>");

// Possible application possibilieties with 4 ingredients
echo(3*4*3*3);


  // a new line of comment to test github, 14:19u
  // The final test @ the end of the lesson, 14:37u
?>
<!DOCTYPE html>
<html>
    <head>  
        <meta charset="UTF-8">
        <title>Pizza service</title>
    </head>
    <body>
        <form method='post'>
            Achternaam:         <input type='text'     name='sSurname'     placeholder='Uw achternaam'><br/>
            Straatnaam:         <input type='text'     name='sStreetName'  placeholder='Uw straatnaam'><br/>
            Huisnummer:         <input type='number'   name='iHomenumber'  step='1'><br/>
            Pizzabodem:         <input type='radio'    name='iBodemSize'   value='25'> 25cm<br/>
                                <input type='radio'    name='iBodemSize'   value='35' checked> 35cm<br/>
                                <input type='radio'    name='iBodemSize'   value='45'> 45cm<br/>
            Pizzabeleg:         <input type='checkbox' name='sTomatosauce' value='Tomatosauce' checked> Tomatensaus <br/>
                                <input type='checkbox' name='Cheese'       value='Cheese'> Cheddar cheese <br/>
                                <input type='checkbox' name='Ansjovis'     value='Ansjovis'> Ansjovis <br/>
                                <input type='checkbox' name='Pineapple'    value='Pineapple'> Annanas <br/>
                                <input type='checkbox' name='Ham'          value='Ham'> Ham <br/>
            Bezorgen:           <select name='iDelivery'>
                                  <option value='1'>Nu bezorgen</option>
                                  <option value='2' selected='selected'>Afhalen</option>
                                  <option value='3'>Morgen bezorgen</option>
                                  <option value='4'>Bezorg op datum</option>
                                </select><br/>
            Datum bezorging:    <input type='date'     name='dDelivery' min='2020-01-02'><br/>            
            Uw e-mail adres:    <input type='email'    name='sEmail'><br/>            
            Overige informatie:<br/>
            <textarea name='sRemarks' cols='80' rows='10' placeholder='Voor uw banknummer en pincode in'></textarea><br/>
            <input type='submit' value='Bestellen'><br/>
        </form>        
    </body>
</html>
