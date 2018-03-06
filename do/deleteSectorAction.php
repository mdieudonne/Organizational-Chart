<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 05/02/18
 * Time: 18:18
 */

$id=$_GET['id'];
deleteOneSector($bdd,$id);

if ($bdd->error) {
    $_SESSION['flash'] ="<div class='col'><br><div class=\"alert alert-danger\">Erreur : \".$bdd->error</div></div>";
}else{
    $_SESSION['flash'] = "<div class='col'><br><div class=\"alert alert-success\">Succès !</div></div>";
};

header('Location: http://organigramme.dev/index.php?admin=listSector');