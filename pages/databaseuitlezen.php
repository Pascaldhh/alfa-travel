
<?php
$id = 1;
include 'db.php';
$db = new db2();
//$titel = $db->Read('vakanties','titel','id =' . $id);
//echo $titel[0]["titel"];

//$picMain = $db->Read('vakanties','hoofdImg','id =' . $id);
//echo ('<img src="images/' . $picMain[0]["hoofdImg"] . '">');

//$text = $db->Read('vakanties','text','id =' . $id);
//echo $text[0]["text"];

//$picSub = $db->Read('vakanties','subImg','id =' . $locid);
//$picSubCount = $db->Read('vakanties','subimgcount','id =' . $locid);


//$picSubR = $picSub[0]["subImg"];
//$picSubD = explode(" ", $picSubR);


//$x = (int)$picSubCount[0]["subimgcount"];



//for ($i=0; $i < $x; $i++) {
//echo ('<img src="images/' . $picSubD[$i] . '">');


//}

$rowCountR = $db->rowCounter('vakanties','id');
$rowCount = (int)$rowCountR[0]["COUNT(`id`)"][0];
?>
