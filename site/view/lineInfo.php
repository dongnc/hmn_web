<h3>Line <?php echo "$code: $name";?></h3>
<div>Start time: <?php echo substr($startTime, 0, 5); ?></div>
<div>End time: <?php echo substr($endTime, 0, 5); ?></div>
<div>Frequency: <?php echo substr($frequency, 4, 1) . " mins"; ?></div>
<div>Distance: <?php echo $distance . "km"; ?></div>
<?php
  $temp = substr($totalTime, 0, 5);
  $time = explode(':', $totalTime);
  if ($time[0] == '00')
    $totalTime = intval($time[1]) . " mins";
  else {
    $totalTime = intval($time[0]) . " hr " . intval($time[1]) . " mins";
  }
?>
<div>Total time: <?php echo $totalTime; ?></div>

<?php
$keys = '';
foreach ($route as $station) {
  $keys = $keys . "station_" . $station['id'] . ",";
}
$keys = rtrim($keys,',');
?>
<script type="text/javascript">
  $('area').mapster('deselect');
  $('#mapImg').mapster('set',true,'<?php echo $keys ?>');
</script>