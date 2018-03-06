<?php messageFlash(); ?>
<?php

if (isset($_GET['id'])) {
    $service_id = $_GET['id'];
} else {
    echo '404';
} ?>
<div class="col-sm-12 d-block m-x-auto">
    <br>

    <form name="service" method="POST">
        <?php
        if (isset($service_id)) {
        foreach (getOneService($bdd, $service_id) as $rs) {

            echo 'ID en cours d\'édition : '.$rs['id'].'<br><br>';
            echo '<input name="service_id" type="hidden" value="'.$rs['id'].'">';
            echo '<input name="name" type="text" value="'.$rs['name'].'"><br><br>';

            echo 'Service parent :<br><br>';
            echo '<select name="parent_id">';
            foreach (getAllServices($bdd) as $service) {
                echo '<option value="'.$service['id'].'">'.$service['name'].'</option>';
            }
            echo '</select><br><br>';

        }
        ?>
        <input class="btn btn-success" type="submit" value="Enregistrer" name="save" formaction="index.php?admin=editServiceAction">
        <input class="btn btn-danger" type="submit" value="Supprimer" name="delete" formaction="/<?php echo 'http://organigramme.dev/index.php?admin=deleteService&id=' . $rs['id'] ?>">
    </form>
    <?php
    }
    ?>
</div>
