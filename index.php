<?php
require "vendor/autoload.php";

use LotusX\model\Sync;
use LotusX\api\HotelBeds;

$HotelBeds = new HotelBeds();
$Sync = new Sync();

$HBedsResult = json_decode($HotelBeds->getPropertyDetails());

$hotels = $HBedsResult->hotels;
$Sync->insert($hotels);

?>
