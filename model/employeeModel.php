<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 05/02/18
 * Time: 17:34
 */

function getAllEmployees($bdd){

    $result = $bdd->query("SELECT e.id AS iem, e.name AS nem, e.filename, e.mobile, e.landline, e.email
                        FROM employee e
                        ORDER BY e.id DESC");
    $result->fetch_array();
    return $result;
}

function getEmployeeList($bdd){

    $result = $bdd->query("SELECT * FROM employee ORDER BY employee.id DESC");
    $result->fetch_array();
    return $result;
}

function getEmployeeByIdJunction($bdd,$junction_id){
    $result = $bdd->query("SELECT e.id AS eid
                          FROM employee e, employee_sector_services ess
                          WHERE ess.employee_id=e.id AND ess.id=$junction_id
                          ");
    $row = $result->fetch_array(MYSQLI_ASSOC);
    return $row;
}

function getAllEmployeesIdSameService($bdd){

    $result = $bdd->query("SELECT service_id,GROUP_CONCAT(employee_id) FROM employee_sector_services GROUP BY service_id");
    $result->fetch_array();
    return $result;
}


function getOneEmployee($bdd,$id){

    $result = $bdd->query("SELECT e.id, e.name, e.filename, e.mobile, e.landline, e.email
                        FROM employee e
                        WHERE e.id=$id");
    $result->fetch_array();
    return $result;
}

function getSectorList($bdd){

    $result = $bdd->query("SELECT * FROM sector ORDER BY name ASC");
    $result->fetch_array();
    return $result;
}
function getServiceList($bdd){

    $result = $bdd->query("SELECT * FROM service ORDER BY name ASC");
    $result->fetch_array();
    return $result;
}
function getFunctionList($bdd){

    $result = $bdd->query("SELECT * FROM function ORDER BY name ASC");
    $result->fetch_array();
    return $result;
}

function deleteOneEmployee($bdd, $id){

    $bdd->query("DELETE FROM employee_sector_services
                WHERE employee_id=$id");

    $bdd->query("DELETE FROM employee
                WHERE employee.id='$id'");

}

function editOneEmployee($bdd, $employee_id, $name, $filename, $mobile, $landline, $email) {
    $bdd->query("UPDATE employee
                SET name='$name', filename='$filename', mobile=$mobile, landline=$landline, email='$email' 
                WHERE employee.id=$employee_id");

}

function addOneEmployee($bdd, $name, $filename, $mobile, $landline, $email) {

    $bdd->query("INSERT INTO employee (id, name, filename, mobile, landline, email)
                VALUES (NULL, '$name', '$filename', $mobile, $landline, '$email')");
}

function addSectorService($bdd, $employee_id, $sector_id, $service_id, $function_id) {

    $bdd->query("INSERT INTO employee_sector_services (id, employee_id, service_id, sector_id, function_id )
                VALUES (NULL, $employee_id, $service_id, $sector_id, $function_id)");
}
function editEmployeeFunction($bdd, $function_id, $essid) {

    $bdd->query("UPDATE employee_sector_services ess
                SET ess.function_id=$function_id
                WHERE ess.id=$essid");
}

function getLastIncrementEmployee($bdd){
    $result=$bdd->query("SELECT `AUTO_INCREMENT`
                            FROM  INFORMATION_SCHEMA.TABLES
                            WHERE TABLE_SCHEMA = 'chart'
                            AND   TABLE_NAME   = 'employee';");

    $row = $result->fetch_array(MYSQLI_ASSOC);
    return $row;
}

function resetAutoIncrementEmployee($bdd){
    $bdd->query(" ALTER TABLE employee AUTO_INCREMENT = 1");

}

function resetAutoIncrementEmployee_sector_services($bdd){
    $bdd->query(" ALTER TABLE employee_sector_services AUTO_INCREMENT = 1");

}
