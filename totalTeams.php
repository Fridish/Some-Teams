  <?php
  //this file should echo the total number of teams in the data
 require __DIR__."/data.php"; ?>
<h3> Number of teams:<?php
$totalTeams= count($teams);
echo $totalTeams;
?> <h3>