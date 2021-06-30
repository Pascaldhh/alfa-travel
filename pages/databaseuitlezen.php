
<?php
include 'database/db.php';
$db = new db();

$rowCountR = $db->Read('COUNT(`vakanties`)','id');
$rowCount = (int)$rowCountR[0]["COUNT(`id`)"][0];
?>
