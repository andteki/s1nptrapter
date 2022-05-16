<?php

include_once('../src/includes/mariadb.php');
include_once('../src/includes/data.php');

$con = connectDB();

insertData($con, 30, 35, 40, 45, 525);
