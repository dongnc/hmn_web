<?php
/**
 * Created by PhpStorm.
 * User: ncdgh
 * Date: 12-May-17
 * Time: 08:51
 */

require_once (dirname(dirname(__DIR__)) . "/libs/Station.php");
$station = new Station();
$result = $station->getList("SELECT id, name FROM " . $station->getTable());
foreach ($result as $row) {
  echo "<option value=\"station_" . $row['id'] . "\">" . $row['name'] . "</option>\n" ;
}