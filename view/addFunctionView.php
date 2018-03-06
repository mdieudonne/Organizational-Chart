<?php messageFlash(); ?>

<div class="col-sm-12 d-block m-x-auto">
    <br>
<?php resetAutoIncrementFunction($bdd);
$lastId=getLastIncrementFunction($bdd);
?>

    <form name="function" method="POST">
        <?php echo 'Nouvelle ID : '.$lastId['AUTO_INCREMENT'];?><br><br>
        <input name="name" type="text" placeholder='Entrer la nouvelle fonction'><br><br>
        <input class="btn btn-success" type="submit" value="Enregistrer" formaction="index.php?admin=addFunctionAction">
    </form>

    </div>
