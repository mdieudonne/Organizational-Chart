<?php

$name=$_POST['name'];
addOneSector($bdd,$name);

if ($bdd->error) {
    $_SESSION['flash'] ="<div class='col'><br><div class=\"alert alert-danger\">Erreur : \".$bdd->error</div></div>";
}else{
    $_SESSION['flash'] = "<div class='col'><br><div class=\"alert alert-success\">Succès !</div></div>";
};

header( 'Location: http://organigramme.dev/index.php?admin=listSector' );
exit( 0 );