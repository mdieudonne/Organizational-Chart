<?php

function getTopParent($bdd){
    $result = $bdd->query("SELECT e.name AS nem, e.filename, e.mobile, e.landline, e.email, sec.name AS nec, ser.name AS nse
                          FROM employee e, service ser, sector sec, employee_sector_services ess
                          WHERE ess.employee_id=e.id AND ess.service_id=ser.id AND ess.sector_id=sec.id
                          AND parent_id=0");
    $row = $result->fetch_array(MYSQLI_ASSOC);
    return $row;
}


function getChild($bdd, $id){

    $result = $bdd->query("SELECT e.name AS nem, e.filename, e.mobile, e.landline, e.email, sec.name AS nec, ser.name AS nse, ser.id AS sid, ser.parent_id AS spi
                        FROM employee e, service ser, sector sec, employee_sector_services ess
                        WHERE ess.employee_id=e.id AND ess.service_id=ser.id AND ess.sector_id=sec.id AND parent_id=$id
                        ORDER BY nse ASC");
    $result->fetch_array();
    return $result;
}

function haveChild($bdd,$id){
        $result = $bdd->query("SELECT id, parent_id FROM service
                          WHERE service.parent_id=$id");
        $result->fetch_array();
        if ($result->num_rows > 0){
            return true;
        }
        else {
            return false;
        }
}

function getMembersName($bdd,$id){
    $result = $bdd->query("SELECT e.name AS ename, e.id, s.name AS sname, f.name AS fname
                        FROM employee e, employee_sector_services ess, sector s, function f
                        WHERE ess.employee_id=e.id AND s.id=ess.sector_id AND f.id=ess.function_id AND service_id=$id");
    $result->fetch_array();
    $names='';
    foreach ($result as $rs){
        $newFunction=$rs['fname'];
        if(isset($oldFunction)==true && ($newFunction==$oldFunction)) {
                $tmp = $rs['ename'];
                $sector = $rs['sname'];
                $nb = $rs['id'];
                $currentName = "<div id=\"$nb\" class=\"employee\">$tmp ($sector)</div>";
                $names = "$names $currentName";

        }else{
            $oldFunction = $rs['fname'];
            $tmp = $rs['ename'];
            $sector = $rs['sname'];
            $nb = $rs['id'];
            $currentName = "<div style=\"font-weight: bold\">$oldFunction</div><div id=\"$nb\" class=\"employee\">$tmp ($sector)</div>";
            $names = "$names $currentName";

        }
    }
    return $names;
}
