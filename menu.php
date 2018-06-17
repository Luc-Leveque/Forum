<div class=" menu2 bouge grandir margehaut ">
    <div class="col-sm-12 paddingTop20">
        <nav class="nav-divider">
            <ul class="nav menu  ">
                <!-- Menu haut -->
                <li><a href="index.php">Accueil</a></li>
                <li>
                    <?php
                     if(isset($_SESSION['connecte']))
                    {
                        
                        $id=$_SESSION['id'];
                        echo "<a href='compte.php?id=$id'>Mon compte</a>";
                    }
                    ?> </li>
                <li>
                    <?php if(isset($_SESSION['connecte']))
                    {
                        echo"<a href='logout.php'>Logout</a>";
                    }
                    else
                    {
                        echo"<a href='login.php'>Login</a>";
                        echo"<a href='inscription.php'>Inscription</a>";
                            
                    }
                    ?> </li>
            </ul>
        </nav>
    </div>
</div>