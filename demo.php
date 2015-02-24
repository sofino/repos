<?php
session_start();
error_reporting(3);
include ("api/ME_api_class.php");
$object = new ME_api;

$object->check_ShipmentTracking('SOF111635');

//echo $data;