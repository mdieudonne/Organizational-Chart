<?php

$server='localhost';
$user='admin';
$password='simplon';
$database='chart';
$bdd = new MySQLi($server,$user,$password,$database);
/* Connect to database and set charset to UTF-8 */
if($bdd->connect_error) {
    echo 'Database connection failed...' . 'Error: ' . $bdd->connect_errno . ' ' . $bdd->connect_error;
    exit;
} else {
    $bdd->set_charset('utf8');
}

session_start();


