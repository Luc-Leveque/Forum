<?php include("headerFOFO.php"); include("menu.php"); ?>

<?php

	$id = $_GET['id'];
	
			
		$requete = $bdd->query("SELECT * FROM categorie,topic WHERE  categorie.id_c=$id and categorie.id_c = topic.id_c") ;

		while($reponse = $requete->fetch())
		{
            $_SESSION['id_c'] = $reponse['id_c'];
            echo"<p class='rouge'>".$reponse['contenut']."<p>";
          
            echo "<div class='aaaa'>";
            echo "<p>Les Topics:</p>";
            echo "</div>";
			echo"<p><a href='topic.php?id=".$reponse['id_t']."'>".$reponse['titre']."<p></a>";
			
            
		}
    
		
?>



<?php include("footerFOFO.php"); ?>