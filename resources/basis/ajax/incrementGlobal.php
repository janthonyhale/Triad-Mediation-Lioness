<?php
include('../common.php');
include('../sqlLibrary.php');

$varName = $_POST['varName'];

$value = incrementGlobal($varName);
echo json_encode($value, JSON_NUMERIC_CHECK);