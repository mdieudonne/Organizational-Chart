<?php messageFlash(); ?>

<?php

if (isset($_GET['id'])) {
    $function_id = $_GET['id'];
} else {
    echo '404';
} ?>

<div class="col-sm-12 d-block m-x-auto">
    <br>
    <form name="sector" method="POST">
        <?php
        if (isset($function_id)) {
            foreach(getServiceFunctionOneEmployee($bdd, $function_id) as $row){

                echo 'Nom de l\'employé et secteur : '.$row['ename'].', '.$row['secname'].'<br><br>';
                echo '<input name="essid" type="hidden" value="'.$row['essid'].'">';
                echo '<input name="eid" type="hidden" value="'.$row['eid'].'">';

                echo '<select class="form-control" name="function_id">';
                foreach (getAllFunction($bdd) as $rs) {
                    echo '<option value="'.$rs['id'].'">'.$rs['name'].'</option>';
                }
                echo '</select><br><br>';
            }
            ?>
            <input class="btn btn-success" type="submit" value="Enregistrer" name="save" formaction="index.php?admin=editEmployeeFunctionAction">
            <input class="btn btn-danger" type="submit" value="Supprimer" name="delete" formaction="/<?php echo 'http://organigramme.dev/index.php?admin=deleteServiceEmployee&id=' . $row['essid'] ?>">
        <?php
        }
        ?>
    </form>
</div>
