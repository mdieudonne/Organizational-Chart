<?php

$employee_id=$_POST['employee_id'];
$sector_id=$_POST['sector_id'];
$service_id=$_POST['service_id'];
$functions_id=$_POST['function_id'];

foreach ($functions_id as $function_id) {
    addSectorService($bdd, $employee_id, $sector_id, $service_id, $function_id);
}

if ($bdd->error) {
    $_SESSION['flash'] ="<div class='col'><br><div class=\"alert alert-danger\">Erreur : \".$bdd->error</div></div>";
}else{
    $_SESSION['flash'] = "<div class='col'><br><div class=\"alert alert-success\">Succès !</div></div>";
};

header('Location: http://organigramme.dev/index.php?admin=listEmployee');