<!DOCTYPE html>
<?php
		$surname = $_GET['cognome'];
		$name = $_GET['nome'];
		$email = $_GET['e-mail'];
		$password = $_GET['password'];
		$Country = $_GET['COMBO'];
		$Gender = $_GET['gender'];

		if (isset($_GET['PatenteA']) && isset($_GET['PatenteB']))
			$Patente = $_GET['PatenteA'] . ' ' . $_GET['PatenteB'];
		else if (isset($_GET['PatenteA']))
					$Patente = $_GET['PatenteA'];
				else
						$Patente = $_GET['PatenteB'];
?>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="../css/style_data.css"/>
  </head>
  <body>
    <div class = "Container" name = "Sign-up">
		<form action = "sign.php" method = "GET">
        <div class="panel panel-default">
         <div class = "panel-heading">
            <center>
              <h2><center>Riepilogo Dati</center></h2>
            </center>  
         </div>
         <div class="panel-body">
          <center>
						  <p>Cognome : <?php echo $surname;?><input id = "SURNAME" type = "hidden" name = "cognome" value = "<?php echo $surname;?>"></p><br>
							<p>Nome : <?php echo $name;?><input id = "NAME" type = "hidden" name = "nome" value = "<?php echo $name;?>"></p><br>
							<p>Sesso : <?php echo $Gender?><input type = "hidden" name = "gender" value = "<?php echo $Gender?>"></p><br>
							<p>Nazionalita : <?php echo $Country;?><input type = "hidden" name = "COMBO" value = "<?php echo $Country?>"></p><br>
							<p>Patente :<?php echo $Patente?><input type = "hidden" name = "Patente" value = "<?php echo $Patente?>"></p><br>
							<p>Email : <?php echo $email;?><input id = "E-MAIL" type = "hidden" name = "e-mail" value = "<?php echo $email;?>"></p><br>
							<p>Password : <?php echo $password;?><input id = "PASSWORD" type = "hidden" name = "password" value = "<?php echo $password;?>"></p><br>
					</center>
         </div>
         <div class = "panel-footer">
					 	<center>
									<button id = "cancel" type = "button" value = "Annulla">Annulla</button>
              		<button id = "sign-up" type = "submit" value = "Registra">Registra</button>
						</center>
         </div>    
        </div>
			</form>
    </div>
		<script type="text/javascript">
    document.getElementById("cancel").onclick = function () {
        location.href = "../index.html";
    };
		</script>
  </body>
</html>