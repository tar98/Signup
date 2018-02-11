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
      <link rel="stylesheet" type="text/css" href="css/style_index.css"/>
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
						<form action = "data.php" method = "get">
							<p>Cognome : <input id = "SURNAME" type = "text" name = "cognome"></p><br>
							<input type = "hidden" name = "text-surname" value = "<?php echo $surname;?>">
							<p>Nome : <input id = "NAME" type = "text" name = "nome"></p><br>
							<input type = "hidden" name = "text-name" value = "<?php echo $name;?>">
							<p>Sesso : Maschio<input type = "Radio" name = "gender" value = "M"> Femmina <input type = "Radio" name = "gender" value = "F"></p><br>
							<p>Nazionalita : <select id = "combobox" name = "COMBO">
																<option name = "IT" value = "Italia">Italia</option>
																<option name = "EN" value = "UK">United Kingdom</option> 
																<option name = "USA" value = "USA">United States of America</option>
																<option name = "FRA" value = "France">France</option>
															 </select></p><br>
							<p>Patente : <input type = "checkbox" name = "Patente">Categ. A <input type = "checkbox" name = "Patente">Categ. B </p><br>
							<p>Email : <input id = "E-MAIL" type = "text" name = "e-mail"></p><br>
							<input type = "hidden" name = "text-email" value = "<?php echo $email;?>">
							<p>Password : <input id = "PASSWORD" type = "text" name = "password"></p><br>
							<input type = "hidden" name = "text-password" value = "<?php echo $password;?>">
						</form>
					</center>
         </div>
         <div class = "panel-footer">
           <form action = "data.php" method = "get">
					 		<center>
              		<p>
                		<button id = "cancel" type = "submit" value = "Annulla">Annulla</button>
                		<button id = "confirm" type = "submit" value = "Conferma" onclick = 
														"<?php
														$surname = $_GET['cognome'];
														$name = $_GET['name'];
														$email = $_GET['e-mail'];
														$password = $_GET['password'];
														$Country = $_GET['COMBO'];
														$Gender = $_GET['gender'];
														$Patente = $_GET['Patente'];
														if((!isset($surname)) && (!isset($name)) && (!isset($email)) && (!isset($password)) && (!isset($Country)) && (!isset($Gender)) (!isset($Patente)))
														{
															
														}
														?>" >Conferma</button>
              		</p>
						 	</center>
					 </form>
         </div>    
        </div>
    </div>
  </body>
</html>