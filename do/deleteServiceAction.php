<?php

$id=$_GET['id'];
if(checkServiceDependent($bdd,$id)==true) {
    if ($bdd->error) {
        $_SESSION['flash'] ="<div class='col'><br><div class=\"alert alert-danger\">Erreur : \".$bdd->error</div></div>";
    }else{
        $_SESSION['flash'] = "<div class='col'><br><div class=\"alert alert-danger\">Sous-service dépendant !</div></div>";
    };
    header('Location: http://organigramme.dev/index.php?admin=listService');
}else{
    deleteOneService($bdd, $id);
    if ($bdd->error) {
        $_SESSION['flash'] ="<div class='col'><br><div class=\"alert alert-danger\">Erreur : \".$bdd->error</div></div>";
    }else{
        $_SESSION['flash'] = "<div class='col'><br><div class=\"alert alert-success\">Succès !</div></div>";
    };

}

header('Location: http://organigramme.dev/index.php?admin=listService');