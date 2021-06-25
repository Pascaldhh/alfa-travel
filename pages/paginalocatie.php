<link rel="stylesheet" href="css/location-page.css">
<div class="content">

<?php
include 'databaseuitlezen.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $locid = $_GET['id'];

}
$titel = $db->Read('vakanties','titel','id =' . $locid);
echo  "<h1>".$titel[0]["titel"]."</h1>";

$picMain = $db->Read('vakanties','hoofdImg','id =' . $locid);
echo " <div class='hoofdimg'> <img src='images/" . $picMain[0]["hoofdImg"] . "'></img> </div>";

$text = $db->Read('vakanties','text','id =' . $locid);
echo ' <p> ' . $text[0]["text"] . '</p> ';


$picSub = $db->Read('vakanties','subImg','id =' . $locid);
$picSubCount = $db->Read('vakanties','subimgcount','id =' . $locid);


$picSubR = $picSub[0]["subImg"];
$picSubD = explode(" ", $picSubR);


$x = (int)$picSubCount[0]["subimgcount"];


if ($x != 0) {
  echo '<div class="slideshow-container">';
  for ($i=0; $i < $x; $i++) {
    echo '<div class="mySlides fade">
        <div class="numbertext">' . $i . ' / ' . $x . '</div>
        <img src="images/' . $picSubD[$i] . '">
    </div>';
  }
  echo "</div>";

  echo ' <script type="text/javascript">
   //java voor de gestolen slider
   var slideIndex = 1;
   showSlides(slideIndex);

   // Next/previous controls
   function plusSlides(n) {
   showSlides(slideIndex += n);
   }

   // Thumbnail image controls
   function currentSlide(n) {
   showSlides(slideIndex = n);
   }

   function showSlides(n) {
   var i;
   var slides = document.getElementsByClassName("mySlides");
   var dots = document.getElementsByClassName("dot");
   if (n > slides.length) {slideIndex = 1}
   if (n < 1) {slideIndex = slides.length}
   for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
   }
   for (i = 0; i < dots.length; i++) {
       dots[i].className = dots[i].className.replace(" active", "");
   }
   slides[slideIndex-1].style.display = "block";
   dots[slideIndex-1].className += " active";
   }

   var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
  }
   </script>';
}



 ?>



</div>
