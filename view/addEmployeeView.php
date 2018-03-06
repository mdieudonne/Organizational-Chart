<?php messageFlash(); ?>

<div class="col-sm-12 d-block m-x-auto">
    <br>
    <?php     resetAutoIncrementEmployee($bdd);
    resetAutoIncrementEmployee_sector_services($bdd);
    $lastId=getLastIncrementEmployee($bdd);
    ?>
    <form name="employee" method="POST">
        <?php echo 'ID nouvel employé : '.$lastId['AUTO_INCREMENT'];?><br><br>
        <input type="hidden" name="employee_id" value="<?=$lastId['AUTO_INCREMENT']?>">
        <input name="name" type="text" placeholder='Nom complet'><br>
        <input name="filename" type="text" placeholder='filename'><br>
        <input name="mobile" type="text" placeholder='Mobile'><br>
        <input name="landline" type="text" placeholder='Fixe'><br>
        <input name="email" type="text" placeholder='Email'><br><br>
        <?php
        echo '<div class="row">';

        echo '<div class="col">';
        echo 'Choisir la zone :<br><br>';

        echo '<select class="form-control" name="sector_id">';
        foreach (getSectorList($bdd) as $sector) {
            echo '<option value="'.$sector['id'].'">'.$sector['name'].'</option>';
        }
        echo '</select>';
        echo '</div>';
        echo '<div class="col">';

        echo 'Choisir un service :<br><br>';
        echo '<select class="form-control" name="service_id">';
        foreach (getServiceList($bdd) as $service) {
            echo '<option value="'.$service['id'].'">'.$service['name'].'</option>';
        }
        echo '</select>';
        echo '</div>';
        echo '</div><br>';

        echo 'Choisir les fonctions :<br><br>';
        echo '<select class="form-control" size="10" name="function_id[]" multiple>';
        foreach (getFunctionList($bdd) as $function) {
            echo '<option value="'.$function['id'].'">'.$function['name'].'</option>';
        }
        echo '</select><br><br>';
        ?>

        <input class="btn btn-success" type="submit" value="Enregistrer" formaction="index.php?admin=addEmployeeAction">
    </form>

</div>
