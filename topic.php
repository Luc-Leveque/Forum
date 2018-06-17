<?php include("headerFOFO.php"); include("menu.php"); ?>
    <div class="row">
        <div class="contenair">
            <?php
			$id_t = $_GET['id'];
			$id_c= $_SESSION['id_c'];
            
			$requete = $bdd->query("SELECT * FROM topic,categorie WHERE topic.id_t=$id_t and categorie.id_c = topic.id_c") ;
	
			while($reponse = $requete->fetch())
			{
                $_SESSION['id_t'] = $reponse['id_t'];
				if( isset ($_SESSION['connecte']))
				{
					echo"<h2  >".$reponse['titre']."</h2>";
					echo "<p>".$reponse['resume']."<p>";	
				
				}
		      else
				{
					echo"<h2 class='popo'>".$reponse['titre']."</h2>";
					echo "<p>".$reponse['contenut']."<p>";
					echo "<p class='bas'>connectez vous pour  répondre</p>";

					
				}
			}
  ?>
                <div class="aaaa">
                    <p>Messages :</p>
                </div>
                <?php     
		if( isset ($_SESSION['connecte']))
				{   $requete = $bdd->query("SELECT * from message ,topic,categorie,user where topic.id_t = message.id_t and message.id_u = user.id_u and categorie.id_c=message.id_c order by message.id_m desc , message.contenu    ") ; 
				   
                    while($reponse = $requete->fetch())
                     {
                        
                        $id=$_SESSION['id'];
                         
                        if (($_SESSION['id_c']='1'))
                        echo "<div class='coaa' >";
                        echo "<p >".$reponse['contenu']."</p>";
                        echo "<p class='zolie'>".$reponse['login']. "<p>";
                        echo "<p class='zolie'>".$reponse['dateenvoie']."</p>";
                        echo "</div>" ;
                        
                       
                       
                     }
                }
					if(isset($_POST['submit']) )
                    {   
                        $date = date("Y-m-d H:i:s");
                        $texte = $_POST['message'];
                        $requete = $bdd->query("INSERT INTO message(contenu,id_u,id_t,id_c,dateenvoie) VALUES ('".$texte."',$id ,$id_t,$id_c,'".$date."')"); 
                        header('Location:topic.php?id='.$_SESSION['id_t']);
                    }
            
                
                
                 echo"<form method='post' action='#' class='decale'>																	
					
					<textarea id='ckeditor' name='message' ></textarea>
                    <input type=submit name=submit >
					</form>
					
					<script src='http://cdn.ckeditor.com/4.5.11/basic/ckeditor.js'></script>
					<script> CKEDITOR.replace('ckeditor'); </script>";
				
                	
 
?> </div>
    </div>
        <?php include("footerFOFO.php"); ?>