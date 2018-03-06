<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 05/02/18
 * Time: 17:34
 */

function getAllSectors($bdd){

    $result = $bdd->query("SELECT *
                        FROM sector
                        ORDER BY id ASC");
    $result->fetch_array();
    return $result;
}

function getOneSector($bdd,$id){

    $result = $bdd->query("SELECT *
                        FROM sector
                        WHERE sector.id=$id");
    $result->fetch_array();
    return $result;
}

function deleteOneSector($bdd,$id){

    $bdd->query("DELETE FROM sector
                WHERE sector.id=$id");
}

function editOneSector($bdd,$id,$name) {
    $bdd->query("UPDATE sector SET name = '$name' 
                WHERE sector.id='$id'");
}

function addOneSector($bdd, $name) {
    $bdd->query("INSERT INTO sector (id, name) VALUES (NULL, '$name');");
}

function getLastIncrementSector($bdd){
    $result=$bdd->query("SELECT `AUTO_INCREMENT`
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'chart'
AND   TABLE_NAME   = 'sector';");

    $row = $result->fetch_array(MYSQLI_ASSOC);
    return $row;

}

function resetAutoIncrementSector($bdd){
    $bdd->query(" ALTER TABLE sector AUTO_INCREMENT = 1");

}