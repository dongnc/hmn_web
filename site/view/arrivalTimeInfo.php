<h3>Station: <?php echo $stationName ?></h3>
<?php foreach ($arrivalTimeInfo as $destination) { ?>
  <hr>
  <h3>Destination: <?php echo $destination['destName'] ?></h3>
  <div>First train: <?php echo rtrim($destination['firstTrain'], ":00") ?></div>
  <div>Last train: <?php echo rtrim($destination['lastTrain'], ":00") ?></div>
  <div>Next train: <?php echo rtrim($destination['nextTrain'], ":00") ?></div>
<?php } ?>