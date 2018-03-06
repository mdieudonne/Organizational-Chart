<?php

$employee_id=$_POST['employee_id'];
$name=$_POST['name'];
$filename=$_POST['filename'];
$mobile=$_POST['mobile'];
$landline=$_POST['landline'];
$email=$_POST['email'];

editOneEmployee($bdd, $employee_id, $name, $filename, $mobile, $landline, $email);

if ($bdd->error) {
    $_SESSION['flash'] ="<div class='col'><br><div class=\"alert alert-danger\">Erreur : \".$bdd->error</div></div>";
}else{
    $_SESSION['flash'] = "<div class='col'><br><div class=\"alert alert-success\">Succès !</div></div>";
};

header('Location: http://organigramme.dev/index.php?admin=listEmployee');