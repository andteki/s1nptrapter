<?php

include_once('mariadb.php');


function insertData($con, $a, $b, $c, $d, $area) {
    $sql = <<<EOT
    insert into datas
    (aside, bside, cside, dside, area)
    values
    ($a, $b, $c, $d, $area)
EOT;
    $con->query($sql);

}

function getDatas($con) {
    $sql = "select * from datas";

    if($result = $con->query($sql)) {
        for( $datar = array(); 
        $row = $result->fetch_assoc(); 
        $datar[] = $row);

    }else {
        echo "Hiba! A lekérdezése sikertelten!";
    }
    return $datar;
}