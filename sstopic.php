<?php include("headerFOFO.php"); include("menu.php"); 

		$id=$_GET['id_s'];
		
        $requete = $bdd->query("SELECT * FROM message,user WHERE message.id_u=user.id_u and id_s=$id ") ;
	
		while($reponse = $requete->fetch())
		{
			echo $reponse['login'] ;
			echo $reponse['contenu'];
			echo $reponse['dateenvoie'];
			
		}
		

		
		



?>


<?php include("footerFOFO.php"); ?>





