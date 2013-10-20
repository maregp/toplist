<?php
	
	include 'config.php';
	
	try
		{
			$pdo = new PDO('mysql:host='.$mysql_host.';dbname='.$database.';port='.$port, $username, $password );
			echo 'Połączenie nawiązane!';
		}
	catch(PDOException $e)
		{
			echo 'Połączenie nie mogło zostać utworzone.<br />';
		}

	
?>

<!DOCTYPE html>
<head>
<title><?php echo $title; ?></title>
test
</head>