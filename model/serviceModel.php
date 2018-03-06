<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 05/02/18
 * Time: 17:34
 */

function getAllServices($bdd){

    $result = $bdd->query("SELECT *
                        FROM service
                        ORDER BY name ASC");
    $result->fetch_array();
    return $result;
}

function getAllFunction($bdd){

    $result = $bdd->query("SELECT *
                        FROM function
                        ORDER BY name ASC");
    $result->fetch_array();
    return $result;
}

function getAllServicesAndFunction($bdd,$id){

    $result = $bdd->query("SELECT ser.name AS sername, sec.name AS secname, f.name AS fname, ess.id AS essid, e.name AS ename
                        FROM service ser, sector sec, function f, employee_sector_services ess, employee e
                        WHERE ess.employee_id=$id AND ser.id=ess.service_id AND sec.id=ess.sector_id AND e.id=ess.employee_id AND f.id=ess.function_id
                        ORDER BY ess.id ASC");
    $result->fetch_array();
    return $result;
}

function getServiceFunctionOneEmployee($bdd,$id){

    $result = $bdd->query("SELECT ser.name AS sername, sec.name AS secname, f.name AS fname, f.id AS fid, ess.id AS essid, e.name AS ename, e.id AS eid
                        FROM service ser, sector sec, function f, employee_sector_services ess, employee e
                        WHERE ess.id=$id AND ser.id=ess.service_id AND sec.id=ess.sector_id AND e.id=ess.employee_id AND f.id=ess.function_id
                        ");
    $result->fetch_array();
    return $result;
}

function getOneService($bdd,$id){

    $result = $bdd->query("SELECT *
                        FROM service
                        WHERE service.id=$id");
    $result->fetch_array();
    return $result;
}

function deleteOneService($bdd, $id){

    $bdd->query("DELETE FROM employee_sector_services
                WHERE service_id=$id");

    $bdd->query("DELETE FROM service
                WHERE service.id='$id'");

}

function editOneService($bdd, $service_id, $name, $parent_id) {
    $bdd->query("UPDATE service
                SET name='$name', parent_id='$parent_id' 
                WHERE service.id=$service_id");

}

function addOneService($bdd, $name, $parent_id) {

    $bdd->query("INSERT INTO service (id, name, parent_id)
                VALUES (NULL, '$name', '$parent_id')");

}

function getLastIncrementService($bdd){
    $result=$bdd->query("SELECT `AUTO_INCREMENT`
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'chart'
AND   TABLE_NAME   = 'service';");

    $row = $result->fetch_array(MYSQLI_ASSOC);
    return $row;

}

function resetAutoIncrementService($bdd){
    $bdd->query(" ALTER TABLE service AUTO_INCREMENT = 1");

}
function deleteOneEmployeeFunction($bdd, $id){

    $bdd->query("DELETE FROM employee_sector_services
                WHERE id=$id");
}

function checkServiceDependent($bdd, $id){

    $result=$bdd->query("SELECT * FROM `service` WHERE parent_id=$id");

    $result->fetch_array();
    if ($result->num_rows > 0){
        return true;
    }
    else {
        return false;
    }

}


