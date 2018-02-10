<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <form id = "sign-in">
      <h2><center>Modulo di Iscrizione</center></h2>
        <div class="panel panel-default">
         <div class="panel-body">
          <center>
            <p>Cognome : <input type = "text" name = "cognome"></p><br>
            <p>Nome : <input type = "text" name = "nome"></p><br>
            <p>Sesso : Maschio<input type = "Radio" name = "gender" value = "M"> Femmina <input type = "Radio" name = "gender" value = "F"></p><br>
            <p>Nazionalita : <select id = "combobox" name = "COMBO">
                              <option name = "IT" value = "Italia">Italia</option>
                              <option name = "EN" value = "UK">United Kingdom</option> 
                              <option name = "USA" value = "USA">United States of America</option>
                              <option name = "FRA" value = "France">France</option>
                             </select></p><br>
          </center>
         </div>
        </div>
    </form>
  </body>
</html>