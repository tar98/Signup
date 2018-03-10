<?php
  session_start();
  
  if(isset($_SESSION['user']))
  {
    $msg = "Ha Fatto l'accesso come utente!";
    $bool = true;
  }
  else
  {
    $msg = "Non ha fatto l'accesso!";
    $bool = false;
  }
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
  </head>
  <body>
    <div class = "Conteiner" name = "Sign-up">
        <div class="panel panel-default">
         <div class = "panel-heading">
            <center>
              <h2><center>Menu Principale</center></h2>
            </center>  
         </div>
         <div class="panel-body">
          <center>
						<p><strong><?php echo $msg; ?></strong></p>
					</center>
         </div>
         <div class = "panel-footer">
					 		<center>
                <?php
                if($bool)
                {
                  echo "<form action = 'sign_in_out.php'>
                          <input id = 'exit' type = 'submit' name = 'but' value = 'Logout'>
                        </form>";
                }
                else
                {
                  echo "<input id = 'exit' type = 'button' onclick = 'back_index()' value = 'Indietro'>
                  <scritp>
                  function back_index()
                  {
                    var Win = window.self;
                    Win.location.href = '../index.html';
                  }
                  </script>";
                }
                ?>
						 	</center>
         </div>    
        </div>
    </div>
  </body>
</html>