<html>
 	<?php session_start();//connexion bdd	
		
	try
	{
		$bdd = new PDO("mysql:host=localhost;dbname=forum;charset=utf8","root","");
	
	}
		catch(Exeption $e)
	{
		die("erreur de connection");
	}
	?>
	<head>
		<title>FOFO</title>
		
		<link rel="stylesheet" href="bootstrap.css"/>
		<link rel="stylesheet" href="StyleFOFO.css"/>
		<meta charset="utf8"/>
	</head>
	<body>
	<div class="central">
	
	
	