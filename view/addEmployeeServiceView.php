<?php messageFlash(); ?>

<div class="col-sm-12 d-block m-x-auto">
    <br>
    <?php
    resetAutoIncrementEmployee($bdd);
    resetAutoIncrementEmployee_sector_services($bdd);
    $lastId=getLastIncrementEmployee($bdd);
    ?>

    <form name="employee" method="POST">
        <?php

        echo '<div class="row">';

        echo '<div class="col">';
        echo 'Employée à lier :<br><br>';
        echo '<select class="form-control" name="employee_id">';
        foreach (getEmployeeList($bdd) as $employee) {
            echo '<option value="'.$employee['id'].'">'.$employee['name'].'</option>';
        }
        echo '</select><br><br>';
        echo '</div>';

        echo '<div class="col">';
        echo 'Affectation du service :<br><br>';
        echo '<select class="form-control" name="service_id">';
        foreach (getServiceList($bdd) as $service) {
            echo '<option value="'.$service['id'].'">'.$service['name'].'</option>';
        }
        echo '</select><br><br>';
        echo '</div>';



        echo '</div>';


        echo '<div class="row">';

        echo '<div class="col">';

        echo 'Affectation de la zone :<br><br>';
        echo '<select class="form-control" name="sector_id">';
        foreach (getSectorList($bdd) as $sector) {
            echo '<option value="'.$sector['id'].'">'.$sector['name'].'</option><br>';
        }
        echo '</select><br><br>';
        echo '</div>';

        echo '<div class="col">';

        echo 'Affectation des fonctions au sein du service :<br><br>';
        echo '<select class="form-control" size="10" name="function_id[]" multiple>';
        foreach (getFunctionList($bdd) as $function) {
            echo '<option value="'.$function['id'].'">'.$function['name'].'</option>';
        }
        echo '</select><br><br>';
        echo '</div>';
        echo '</div>';

        ?>

        <input class="btn btn-success" type="submit" value="Enregistrer" formaction="index.php?admin=addEmployeeServiceAction">
    </form>

</div>
