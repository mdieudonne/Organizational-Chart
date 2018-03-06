<?php messageFlash(); ?>

<div class="col-sm-12 d-block m-x-auto">
    <br>
<?php resetAutoIncrementSector($bdd);
$lastId=getLastIncrementSector($bdd);
?>


    <form name="sector" method="POST">
        <?php echo 'Nouvelle ID : '.$lastId['AUTO_INCREMENT'];?><br><br>
        <input name="name" type="text" placeholder='Entrer la nouvelle zone'><br><br>
        <input class="btn btn-success" type="submit" value="Enregistrer" formaction="index.php?admin=addSectorAction">
    </form>

    </div>
