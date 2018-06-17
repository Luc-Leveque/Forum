<?php include("headerFOFO.php"); include("menu.php"); ?>

<div class="container colonne3 backcolor">			<!-- Bloc de ouf -->
	<div class="margehaut">

<?php


$id_u = $_GET['id'];

$requete = $bdd->query("SELECT * FROM user  WHERE user.id_u=$id_u ") ;

while($reponse = $requete->fetch())
{
					echo "<p> Le Compte de : <p>";
					echo "<p>".$reponse['login']."<p>";
    
                    echo "<p> mail :  <p>";            
					echo "<p>".$reponse['email']."<p>";
}

 ?>
            <div> <a href="Edcompte.php">Editer mon profil</a> </div>
            <div class="aaaa">
                <p>Mes messages :</p>
            </div>
            <?php    

if(isset($_GET['id']))
	{
		$request = $bdd->query("DELETE FROM message WHERE id_m=".$_GET['id']);
	}

    $requete = $bdd->query("SELECT * FROM message , user where user.id_u = message.id_u");

    echo "<ul >";
    
	
	while($reponse = $requete->fetch())
	{
		echo "<li>".$reponse['contenu']." <a href='compte.php?id=".$reponse['id_m']."'>X</a></li>";
	
	}
	echo "</ul>";




?>

     
    
	

<?php include("footerFOFO.php"); ?>