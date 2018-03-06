<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 05/02/18
 * Time: 17:34
 */

function getAllFunctions($bdd){

    $result = $bdd->query("SELECT *
                        FROM function
                        ORDER BY id ASC");
    $result->fetch_array();
    return $result;
}

function getOneFunction($bdd,$id){

    $result = $bdd->query("SELECT *
                        FROM function
                        WHERE function.id=$id");
    $result->fetch_array();
    return $result;
}

function deleteOneFunction($bdd,$id){

    $bdd->query("DELETE FROM function
                WHERE function.id=$id");
}

function editOneFunction($bdd,$id,$name) {
    $bdd->query("UPDATE function SET name = '$name' 
                WHERE function.id='$id'");
}

function addOneFunction($bdd, $name) {
    $bdd->query("INSERT INTO function (id, name) VALUES (NULL, '$name');");
}

function getLastIncrementFunction($bdd){
    $result=$bdd->query("SELECT `AUTO_INCREMENT`
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'chart'
AND   TABLE_NAME   = 'function';");

    $row = $result->fetch_array(MYSQLI_ASSOC);
    return $row;

}

function resetAutoIncrementFunction($bdd){
    $bdd->query(" ALTER TABLE function AUTO_INCREMENT = 1");

}