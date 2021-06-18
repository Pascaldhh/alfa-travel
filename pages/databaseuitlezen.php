<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
  $counter = 1;
  include 'db.php';
  $db = new db();
  $titel = $db->Read('vakanties','titel','id =' . $counter);
  echo $titel[0]["titel"];

  $picMain = $db->Read('vakanties','hoofdImg','id =' . $counter);
  var_dump($picMain);
  echo ('<img src="images/' . $picMain[0]["hoofdImg"] . '">');

  $text = $db->Read('vakanties','text','id =' . $counter);
  echo $text[0]["text"];



 ?>




<img src="" alt="">

  </body>
</html>
