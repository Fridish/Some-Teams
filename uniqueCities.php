<?php
//this file should display all the unique city values that exists in the data.
require __DIR__ . "/data.php";
$cityValues = array_column($teams, "city");
$uniqueCities = array_unique($cityValues);
?>
<p> <?php echo "Cities: " . implode(", ", $uniqueCities); ?> </p>