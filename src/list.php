<?php

/*
* File: list.php
* Author: Nagy János
* Copyright: 2022, Nagy János
* Group: Szoft I N
* Date: 2022-05-16
* Github: https://github.com/andteki/
* Licenc: GNU GPL
*/

include_once('includes/mariadb.php');
include_once('includes/data.php');

$con = connectDB();
$datar = getDatas($con);





echo file_get_contents('templates/head.html');
echo file_get_contents('templates/nav.html');

$tableRowOrig = file_get_contents('templates/tableRow.html');

$tableBody = '';
foreach($datar as $row) {
    $tableRow = $tableRowOrig;
    $tableRow = str_replace('{{ id }}', $row['id'], $tableRow);
    $tableRow = str_replace('{{ aside }}', $row['aside'], $tableRow);
    $tableRow = str_replace('{{ bside }}', $row['bside'], $tableRow);
    $tableRow = str_replace('{{ cside }}', $row['cside'], $tableRow);
    $tableRow = str_replace('{{ dside }}', $row['dside'], $tableRow);
    $tableRow = str_replace('{{ area }}', $row['area'], $tableRow);
    $tableBody = $tableBody . $tableRow;
}

// echo "teljes tartalom".$tableBody;

$page = file_get_contents('templates/list.html');
$page = str_replace('{{ dataBody }}', $tableBody, $page);
echo $page;


echo file_get_contents('templates/foot.html');