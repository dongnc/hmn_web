<?php
/**
 * Created by PhpStorm.
 * User: ncdgh
 * Date: 11-May-17
 * Time: 16:06
 */

require_once (dirname(dirname(__DIR__)) . "/libs/ArrivalTime.php");
if (!isset($_GET['stationid'])) die("Information not found!");
$staionId = intval($_GET['stationid']);
$arrivalTime = new ArrivalTime();
$station = new Station();
$arrivalTimeInfo = $arrivalTime->getArrivalTimeInfo($staionId);
echo "<h2>Station: " . $station->getFieldValueById('name', $staionId) . "</h2>";
echo json_encode($arrivalTimeInfo);
echo "<br>";
print_r($arrivalTimeInfo);