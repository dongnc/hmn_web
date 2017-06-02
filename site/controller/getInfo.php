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
foreach ($arrivalTimeInfo as $key=>$destStaion) {
  $firstTrain = strtotime("1970-01-01 " . $destStaion['firstTrain'] . " UTC");
  $firstTrain = round($firstTrain/60)*60;
  $firstTrain = gmdate("H:i", $firstTrain);
  $lastTrain = strtotime("1970-01-01 " . $destStaion['lastTrain'] . " UTC");
  $lastTrain = round($lastTrain/60)*60;
  $lastTrain = gmdate("H:i", $lastTrain);
  if ($destStaion['nextTrain']!=NULL ) {
    $nextTrain = strtotime("1970-01-01 " . $destStaion['nextTrain'] . " UTC");
    $nextTrain = $nextTrain - strtotime("1970-01-01 " . gmdate("H:i:s") . " UTC");
    $nextTrain = round($nextTrain/60)*60;
    $nextTrain = intval(gmdate("i", $nextTrain)) . " mins";
  }
  else $nextTrain = "Not available";
  echo "<hr>";
  echo "<h3>Destination: " . $key . "</h3>";
  echo "<div>First train: " . $firstTrain . "</div>";
  echo "<div>Last train: " . $lastTrain . "</div>";
  echo "<div>Next train: " . $nextTrain . "</div>";
/*  echo $destStaion['nextTrain'] . "<br>";
  echo strtotime("1970-01-01 " . gmdate("H:i:s") . " UTC") . "<br>";
  echo strtotime("1970-01-01 " . $destStaion['nextTrain'] . " UTC");*/
}