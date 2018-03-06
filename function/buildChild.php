<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 05/02/18
 * Time: 14:08
 */

function buildChild($bdd, $id)
{
    $children = getChild($bdd, $id);

    foreach ($children as $child) {

        if (haveChild($bdd, $child['sid']) == false) {
            if (isset($tmp)!=true || $child['nse']!=$tmp) {

                echo '{ \'name\': \'' . $child['nse'] . '\', \'title\': \'' . getMembersName($bdd, $child['sid']) . '\' },';
                echo "\n";
                $tmp = $child['nse'];
            }

        } else {
            if (isset($tmp)!=true || $child['nse']!=$tmp) {

                echo '{ \'name\': \'' . $child['nse'] . '\', \'title\': \'' . getMembersName($bdd, $child['sid']) . '\',';
                echo "\n";
                echo '\'children\': [';
                echo "\n";
                buildChild($bdd, $child['sid']);
                echo "\n";
                echo "]";
                echo "\n";
                echo "},";
                $tmp = $child['nse'];

            }
        }
    }
}
