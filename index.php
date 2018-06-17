 <?php include("headerFOFO.php"); ?>
 

 
	<nav>	<!-- Image de fond -->
	
	<?php include("menu.php"); ?>	
	
		<div class="container colonne3 backcolor">			<!-- Bloc de ouf -->
			<div class="margehaut">
                <div class="aaaa">
                        <p>Bienvenue sur le forum des cours   :</p>
                    </div>
			
		          
          
           
                                
                         <?php
                            $requete= $bdd ->query("SELECT * FROM topic,categorie where categorie.id_c = topic.id_c");
                         
                            while($reponse = $requete->fetch())
                            
                            {
                            echo "<ul class= 'coaa'>";
                            echo "<p class='titi'><a href='categorie.php?id=".$reponse['id_c']."'>".$reponse['titreC']."<p>"; 
                            echo "</a> ";
                            echo"</ul>";
                            }
                            
                         ?>
                
                
                
 
            </div>
        </div>
 <?php include("footerFOFO.php"); ?>