<h3>Station: <?php echo $stationName ?></h3>
<?php foreach ($arrivalTimeInfo as $destination) { ?>
  <hr>
  <h4>Towards: <?php echo $destination['destName'] ?></h4>
  <div>First train: <?php echo substr($destination['firstTrain'], 0, 5) ?></div>
  <div>Last train: <?php echo substr($destination['lastTrain'], 0, 5) ?></div>
  <div>Next train: <?php echo substr($destination['nextTrain'], 0,5) ?></div>
<?php } ?>