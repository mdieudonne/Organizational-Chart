<?php messageFlash(); ?>
<?php

if (isset($_GET['id'])) {
    $sector = $_GET['id'];
} else {
    echo '404';
} ?>
    <div class="col-sm-12 d-block m-x-auto">
        <br>

    <form name="sector" method="POST">
<?php
if (isset($sector)) {
    foreach (getOneSector($bdd, $sector) as $rs) {
        echo 'ID zone : '.$rs['id'].'<br><br>';
        echo '<input name="id" type="hidden" value=' . $rs['id'] . '>
              <input name="name" type="text" value=' . $rs['name'] . '><br>';
    }
    ?>
        <br>
    <input class="btn btn-success" type="submit" value="Enregistrer" name="save" formaction="index.php?admin=editSectorAction">
    <input class="btn btn-danger" type="submit" value="Supprimer" name="delete" formaction="/<?php echo 'http://organigramme.dev/index.php?admin=deleteSector&id=' . $rs['id'] ?>">
    </form>
    <?php
}
?>
    </div>
