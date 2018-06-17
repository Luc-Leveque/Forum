<?php include("HeaderFOFO.php"); include("menu.php"); ?>

<div class="container colonne3 backcolor">			<!-- Bloc de ouf -->
	<div class="margehaut">
        

        
        <?php
 if(isset($_SESSION['id']))  
     
 {
            $requete = $bdd->prepare("SELECT * FROM user WHERE id_u = ?");
            $requete->execute(array($_SESSION['id']));
            $user = $requete->fetch();
          
          
     
 
        if(isset($_POST['login']) AND !empty($_POST['login']) AND $_POST['login'] != $user['login'] )
        {
            $login = htmlspecialchars($_POST['login']);
            $insertp = $bdd->prepare ("UPDATE user SET login = ?  WHERE id_u = ? ");
            $insertp->execute(array($login, $_SESSION['id']));
            header('Location:compte.php?id='.$_SESSION['id']);
        }
     
                
     
        if(isset($_POST['email']) AND !empty($_POST['email']) AND $_POST['email'] != $user['email']) 
        {
            $email= htmlspecialchars($_POST['email']);
            $insertp = $bdd->prepare ("UPDATE user SET email = ?  WHERE id_u = ? ");
            $insertp->execute(array($email, $_SESSION['id']));
            header('Location: compte.php?id='.$_SESSION['id']);
        }
     
        if(isset($_POST['mdp']) AND !empty($_POST['mdp']) AND $_POST['login'] != $user['mdp'])  
        {
            $mdp = htmlspecialchars(sha1($_POST['mdp']));
            $insertp = $bdd->prepare ("UPDATE user SET mdp = ?  WHERE id_u = ? ");
            $insertp->execute(array($mdp, $_SESSION['id']));
            header('Location: compte.php?id='.$_SESSION['id']);
        }

        
        
 }
 
else
{
    header("Location:login.php");
}
?>
        
        <link rel="stylsheet" href="style.css" />
        <form  method="post">
            <input type="email" name="email" value= <?php echo $user['email']; ?> >
            <input type="text" name="login"  value= <?php echo $user['login']; ?> >
            <input type="password" name="mdp"  placeholder="mdp" >
            <input type="submit" name="submit" value="Envoyer">
        </form>
	
	
	</div>
</div>


<?php include("footerFOFO.php"); ?>