<?php

$id_junction=$_GET['id'];
$employee_id=getEmployeeByIdJunction($bdd,$id_junction);
deleteOneEmployeeFunction($bdd, $id_junction);

if ($bdd->error) {
    $_SESSION['flash'] ="<div class='col'><br><div class=\"alert alert-danger\">Erreur : \".$bdd->error</div></div>";
}else{
    $_SESSION['flash'] = "<div class='col'><br><div class=\"alert alert-success\">Succès !</div></div>";
};

header('Location: http://organigramme.dev/index.php?admin=viewEmployeeServiceAndFunction&id='.$employee_id['eid'].'');