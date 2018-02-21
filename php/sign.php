<?php
	include 'start_db.php';
	$Patente = $_GET['Patente'];
	$surname = $_GET['cognome'];
	$name = $_GET['nome'];
	$email = $_GET['e-mail'];
	$password = $_GET['password'];
	$Country = $_GET['COMBO'];
	$Gender = $_GET['gender'];
			
  try
  {
		$Query = $db->prepare("INSERT INTO Recap(Cognome,Nome,Sesso,Nazionalita,Patente,E-mail,Password) VALUES (:cognome,:nome,:sesso,:nazionalita,:patente,:e-mail,:password);");
		$Query->bindValue(':cognome',$surname, PDO::PARAM_STR);
		$Query->bindValue(':nome',$name, PDO::PARAM_STR);
		$Query->bindValue(':sesso',$Gender, PDO::PARAM_STR);
		$Query->bindValue(':nazionalita',$Country, PDO::PARAM_STR);
		$Query->bindValue(':patente', $Patente, PDO::PARAM_STR);
		$Query->bindValue(':e-mail', $email, PDO::PARAM_STR);
		$Query->bindValue(':password', $password, PDO::PARAM_STR);
		if($Query->execute())
			echo "<script type='text/javascript'>alert('Inserito!');</script>";
		else
			echo "<script type='text/javascript'>alert('Non Inserito!');</script>";
	}catch(PDOException $ex) {echo 'Error Bind : ' . $ex->getMessage();}
		
?>
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
      <link rel="stylesheet" type="text/css" href="../css/style_sign.css"/>
  </head>
  <body>
    <div class = "Conteiner" name = "Sign-up">
        <div class="panel panel-default">
         <div class = "panel-heading">
            <center>
              <h2><center>Esito dell'iscrizione</center></h2>
            </center>  
         </div>
         <div class="panel-body">
          <center>
						<p><strong>Dati correttamenti registrati</strong></p>
					</center>
         </div>
         <div class = "panel-footer">
					 		<center>
                <form action = "../index.html">
              		<p>
                		<button id = "Close" type = "submit" value = "Chiudi">Chiudi</button>
              		</p>
                </form>
						 	</center>
         </div>    
        </div>
    </div>
  </body>
</html>