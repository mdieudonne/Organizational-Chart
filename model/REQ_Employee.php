<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 06/02/18
 * Time: 19:25
 */

include '../config.php';

$idEmployee = $_POST['idEmployee'];

// Perform queries
$result=$bdd->query("SELECT id, name, filename, email, mobile, landline FROM employee WHERE employee.id=$idEmployee");
$row = $result->fetch_array(MYSQLI_ASSOC);
if($row) {
    $out = '
        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Filename</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Fixe</th>
            </tr>
            </thead>
            <tbody>
    ';

        $out .= '<tr>';
        $out .= '<td class="td_name">' . $row['name'] . '</td>';
        $out .= '<td class="td_filename">' . $row['filename'] . '</td>';
        $out .= '<td class="td_email">' . $row['email'] . '</td>';
        $out .= '<td class="td_mobile">' . $row['mobile'] . '</td>';
        $out .= '<td class="td_landline">' . $row['landline'] . '</td>';
        $out .= '</tr>';

    $out .= '</tbody></table>';
    echo $out;
}?>
