<?php
/**
 * Created by PhpStorm.
 * User: ncdgh
 * Date: 12-May-17
 * Time: 01:19
 */
require_once (dirname(dirname(__DIR__)) . "/libs/Station.php");
if (!isset($_GET['stationid'])) die("sdsd");
$staionId = intval($_GET['stationid']);
$station = new Station();
echo $station->getFieldValueById('name', $staionId);