<!DOCTYPE html>
<?php
		$PatenteA;
		$PatenteB;
		$surname = $_GET['cognome'];
		$name = $_GET['nome'];
		$email = $_GET['e-mail'];
		$password = $_GET['password'];
		$Country = $_GET['COMBO'];
		$Gender = $_GET['gender'];
		if(isset($_GET['PatenteA'])) $PatenteA = $_GET['PatenteA'];
		if(isset($_GET['PatenteB'])) $PatenteB = $_GET['PatenteB'];
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
      <link rel="stylesheet" type="text/css" href="css/style_data.css"/>
  </head>
  <body>
    <div class = "Conteiner" name = "Sign-up">
        <div class="panel panel-default">
         <div class = "panel-heading">
            <center>
              <h2><center>Riepilogo Dati</center></h2>
            </center>  
         </div>
         <div class="panel-body">
          <center>
						  <p>Cognome : <?php echo $surname;?></p><br>
							<p>Nome : <?php echo $name;?></p><br>
							<p>Sesso : <?php echo $Gender?></p><br>
							<p>Nazionalita : <?php echo $Country;?></p><br>
							<p>Patente :<?php
								if(isset($PatenteA)) echo $PatenteA . ' ';
								if(isset($PatenteB)) echo $PatenteB;
								?> </p><br>
							<p>Email : <?php echo $email;?></p><br>
							<p>Password : <?php echo $password;?></p><br>
					</center>
         </div>
         <div class = "panel-footer">
					 	<center>
									<button id = "cancel" type = "submit" value = "Annulla">Annulla</button>
              		<button id = "sign-up" type = "submit" value = "Registra">Registra</button>
						</center>
         </div>    
        </div>
    </div>
		<script type="text/javascript">
    document.getElementById("cancel").onclick = function () {
        location.href = "index.html";
    };
		</script>
		<script type="text/javascript">
    document.getElementById("sign-up").onclick = function () {
        location.href = "sign.html";
    };
		</script>
  </body>
</html>