<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <body>
    <div class = "Conteiner" name = "Sign-up">
        <div class="panel panel-default">
         <div class = "panel-heading">
            <center>
              <h2><center>Modulo di Iscrizione</center></h2>
            </center>  
         </div>
         <div class="panel-body">
          <center>
            <p>Cognome : <input type = "text" name = "cognome"/></p><br>
            <p>Nome : <input type = "text" name = "nome"/></p><br>
            <p>Sesso : Maschio<input type = "Radio" name = "gender" value = "M"/> Femmina <input type = "Radio" name = "gender" value = "F"/></p><br>
            <p>Nazionalita : <select id = "combobox" name = "COMBO">
                              <option name = "IT" value = "Italia">Italia</option>
                              <option name = "EN" value = "UK">United Kingdom</option> 
                              <option name = "USA" value = "USA">United States of America</option>
                              <option name = "FRA" value = "France">France</option>
                             </select></p><br>
            <p>Patente : <input type = "checkbox" name = "Patente"/>Categ. A <input type = "checkbox" name = "Patente"/>Categ. B </p><br>
            <p>Email : <input type = "text" name = "e-mail"/></p><br>
            <p>Password : <input type = "text" name = "password"/></p><br>
          </center>
         </div>
         <div class = "panel-footer">
           <center>
              <p>
                <button id = "cancel" type = "submit" name = "cancel" value = "Annulla">Annulla</button>
                <button id = "confirm" type = "submit" name = "confirm" value = "Conferma">Conferma</button>
              </p>
           </center>
         </div>    
        </div>
    </div>
  </body>
</html>