<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
  $id = 1;
  include 'db.php';
  $db = new db();
  $titel = $db->Read('vakanties','titel','id =' . $id);
  echo $titel[0]["titel"];

  $picMain = $db->Read('vakanties','hoofdImg','id =' . $id);
  echo ('<img src="images/' . $picMain[0]["hoofdImg"] . '">');

  $text = $db->Read('vakanties','text','id =' . $id);
  echo $text[0]["text"];

  $picSub = $db->Read('vakanties','subImg','id =' . $id);
  $picSubCount = $db->Read('vakanties','subimgcount','id =' . $id);


  $picSubR = $picSub[0]["subImg"];
  $picSubD = explode(" ", $picSubR);


  $x = (int)$picSubCount[0]["subimgcount"];



for ($i=0; $i < $x; $i++) {
  echo ('<img src="images/' . $picSubD[$i] . '">');


}


 ?>






  </body>
</html>
