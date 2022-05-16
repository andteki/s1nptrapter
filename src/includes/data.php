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