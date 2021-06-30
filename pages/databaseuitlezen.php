<?php
$db = new DB();
$rowCountR = $db->Read('vakanties', 'COUNT(`id`)');
$rowCount = (int)$rowCountR[0]["COUNT(`id`)"][0];
?>
