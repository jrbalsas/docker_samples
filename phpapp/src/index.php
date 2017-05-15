<!doctype html>
<html lang="es">
<meta charset="utf-8">
<title>Hello world</title>
<h1>It works!</h1>
<?
	echo '<h2>'.$_SERVER["SERVER_NAME"].'</h2>';

	//Recover data from environment variables
	$dbname=$_ENV['MYSQL_DATABASE'];
	$dbuser=$_ENV['MYSQL_USER'];
	$dbpass=$_ENV['MYSQL_PASSWORD'];
	$dbhost='mariadb';
	$dsn="mysql:host=$dbhost;dbname=$dbname";

	try {
		$db = new PDO ($dsn, $dbuser, $dbpass);
		echo '<p>Database connection established</p>';
	} catch (PDOException $e) {
		echo '<p>Database connection error: '.$e->getMessage().'</p>';
	}

	phpinfo();
?>
