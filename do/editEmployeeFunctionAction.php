<?php

$essid=$_POST['essid'];
$function_id=$_POST['function_id'];
$employee_id=$_POST['eid'];

editEmployeeFunction($bdd, $function_id, $essid);

if ($bdd->error) {
    $_SESSION['flash'] ="<div class='col'><br><div class=\"alert alert-danger\">Erreur : \".$bdd->error</div></div>";
}else{
    $_SESSION['flash'] = "<div class='col'><br><div class=\"alert alert-success\">Succès !</div></div>";
};

header('Location: http://organigramme.dev/index.php?admin=listEmployee');