<?php messageFlash(); ?>

<div class="col-sm-12 d-block m-x-auto">
    <br>

    <?php resetAutoIncrementService($bdd);
    $lastId=getLastIncrementService($bdd);
    ?>

    <form name="service" method="POST">
        <?php echo 'Nouvel ID : '.$lastId['AUTO_INCREMENT'];?><br><br>
        <input name="name" type="text" placeholder='Nom du service'><br><br>

        <?php
        echo 'Service parent :<br><br>';
        echo '<select class="form-control" name="parent_id">';
        foreach (getAllServices($bdd) as $service) {
            echo '<option value="'.$service['id'].'">'.$service['name'].'</option>';
        }
        echo '</select>';?><br><br>

        <input class="btn btn-success" type="submit" value="Enregistrer" formaction="index.php?admin=addServiceAction">
    </form>

</div>
