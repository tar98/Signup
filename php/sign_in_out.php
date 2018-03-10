<?php
if($_POST['but'] == "Logout")
{
	session_start();
	session_destroy();
	echo	"<script>
			alert('Logout eseguito');
			location.href = '../index.html';
			</script>";
}

include 'start_db.php';
$User = $_POST['user'];
$Pass = $_POST['PS'];

	if(isset($_SESSION['User']))
	{
	echo	"<script>
				alert('Impossibile accedere, un'altro utente e gia connesso da questo termianle!');
				location.href = 'Main.php';
				</script>";
	}
	else
	{
		try
		{
			$Query = "SELECT Email,Password FROM Recap;";
			$code = $db->prepare($Query);
			if($code->execute())
			{
				while($row = $code->fetch())
				{
					if($row['Email'] == $User && $row['Password'] == $Pass)
					{
						session_start();
						echo 
							"<script>
							alert('Utente Registrato');
							location.href = '../index.html';
							</script>";
						$_SESSION['user'] = $User;
					}
				}
				echo  
					"<script>
					alert('Utente Non Esiste');
					location.href = '../Sign-in.html';
					</script>";
			}
		}catch(PDOException $ex) {echo $ex->getMessage();}
	}
?>