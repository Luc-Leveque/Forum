<?php include("headerFOFO.php"); include("menu.php");

		$id_s=$_GET['id'];
		$id_t=$_GET[''];
				
	/* 	$requete = $bdd->query("SELECT * FROM message WHERE id_s=$id_s && id_t=") ;
	
		while($reponse = $requete->fetch())
		 */

		$requete = $bdd->query("SELECT * FROM message where id ")
		
		while($reponse = $requete->fetch())
		{
				echo" $reponse['contenu']";
		}


		if( isset ($_SESSION['connecte']))
				{
					echo"<form method='post' action='#'>																	
					
					<textarea id='ckeditor' name=message ></textarea>
					</form>
					
					<script src='http://cdn.ckeditor.com/4.5.11/basic/ckeditor.js'></script>
					<script> CKEDITOR.replace('ckeditor'); </script>
					<input type=submit name=submit >";
				}
				
		

?>










<?php include("footerFOFO.php"); ?>
