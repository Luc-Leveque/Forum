<?php include("headerFOFO.php"); include("menu.php"); ?>


<?php
if(isset($_POST['submit']))
	{
		$login =$_POST['login'];
		$email = $_POST['email'];
		$mdp = sha1($_POST['mdp']);
        $date = date("Y-m-d H:i:s");
		
		$requete = $bdd->query("INSERT INTO user(login,mdp,email,lvl,dateinscription) VALUES('".$login."','".$mdp."','".$email."',1,'".$date."')");
		$_SESSION['connecte'] = true;
		$_SESSION['id'] = $bdd->lastInsertId();
		$_SESSION['lvl'] = 1;
		mail($email,"Inscription","Bienvenue");
		header("Location:index.php");
	}
?>


            <html lang="en">

            <head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

                <!-- Website CSS style -->
                <link rel="stylesheet" type="text/css" href="assets/css/main.css">

                <!-- Website Font style -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

                <!-- Google Fonts -->
                <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
                <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

                <title>Admin</title>
            </head>

            <body>
                <div class="container">
                    <div class="row main">
                        <div class="panel-heading">
                            <div class="panel-title text-center">
                                <h1 class="title">INSCRIPTION</h1>
                                <hr />
                            </div>
                        </div>
                        <div class="main-login main-center">
                            <form class="form-horizontal" method="post" action="#">

                                <div class="form-group">
                                    <label for="login" class="cols-sm-2 control-label">Login</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="login" class="form-control" name="login" id="name" placeholder="Enter your Name" />
                                        </div>
                                    </div>

                                    <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" />
                                        </div>
                                    </div>

                                    <label for="mdp" class="cols-sm-2 control-label">Password</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="mdp" id="password" placeholder="Enter your Password" />
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <input type="submit" class="btn btn-lg btn-primary" name="submit">

                                    </div>
                                    <div class="login-register">
                                        <a href="index.php">Login</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="assets/js/bootstrap.js"></script>

<?php include("footerFOFO.php"); ?>
