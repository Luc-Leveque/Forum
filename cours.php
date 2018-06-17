
<?php include("headerFOFO.php"); include("menu.php"); 

		$id=$_GET['id_c'];
				
		$requete = $bdd->query("SELECT * FROM message WHERE id_c=$id") ;
	
		while($reponse = $requete->fetch())



?>





<?php includes("footer.php") ?>