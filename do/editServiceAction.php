<?php

$service_id=$_POST['service_id'];
$name=$_POST['name'];
$parent_id=$_POST['parent_id'];

editOneService($bdd,$service_id,$name,$parent_id);

if ($bdd->error) {
    $_SESSION['flash'] ="<div class='col'><br><div class=\"alert alert-danger\">Erreur : \".$bdd->error</div></div>";
}else{
    $_SESSION['flash'] = "<div class='col'><br><div class=\"alert alert-success\">Succès !</div></div>";
};

header('Location: http://organigramme.dev/index.php?admin=listService');