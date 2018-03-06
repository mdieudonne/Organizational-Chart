<?php messageFlash(); ?>

<?php

if (isset($_GET['id'])) {
    $employee = $_GET['id'];
} else {
    echo '404';
} ?>
<div class="col-sm-12 d-block m-x-auto">
    <br>

    <form name="sector" method="POST">
        <?php
        if (isset($employee)) {
        foreach (getOneEmployee($bdd, $employee) as $rs) {

            echo 'ID : '.$rs['id'].'<br><br>';
            echo '<input name="employee_id" type="hidden" value="'.$rs['id'].'">';
            echo '<input name="name" type="text" value="'.$rs['name'].'"><br>';
            echo '<input name="filename" type="text" value="'.$rs['filename'].'"><br>';
            echo '<input name="mobile" type="text" value="'.$rs['mobile'].'"><br>';
            echo '<input name="landline" type="text" value="'.$rs['landline'].'"><br>';
            echo '<input name="email" type="email" value="'.$rs['email'].'"><br><br>';

        }
        ?>
        <input class="btn btn-success" type="submit" value="Enregistrer" name="save" formaction="index.php?admin=editEmployeeAction">
        <input class="btn btn-danger" type="submit" value="Supprimer" name="delete" formaction="/<?php echo 'http://organigramme.dev/index.php?admin=deleteEmployee&id=' . $rs['id'] ?>">
    </form>
    <?php
    }
    ?>
</div>
