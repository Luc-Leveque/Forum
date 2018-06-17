<?php include("header.php") ?>
<?php include("menu.php") ?>

<?php
    
$_SESSION['id']=1
$id=1;

$requete = "select * from message,user where user.id_u = message.id_exp AND id_dest = " . $id;
$requete = $dbb->query($requete);


    
?>


<div >
    <h1>Message reçu :</h1>
    <?php while ($result = $requete->fetch()){?>
        <div class="message">
            <h3><?= result['titre'] ?></h3>
            <div class="contenu">
                <?= result['contenu'] ?>
            </div>
    </div>
    <?php } ?>
</div>














<?php include("footer.php") ?>