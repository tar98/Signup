<?php
include 'start_db.php';
$User = $_POST['user'];
$Pass = $_POST['PS'];

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
				}
			}
      echo  
        "<script>
        alert('Utente Non Esiste');
        location.href = '../Sign-in.html';
        </script>";
    }
	}catch(PDOException $ex) {echo $ex->getMessage();}
?>