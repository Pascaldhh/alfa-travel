<link rel="stylesheet" type="text/css" href="css/bpv.css">
<?php


try {
  $db_alfatravel = new PDO('mysql:host=localhost;dbname=alfatravel' , 'root', '');
  $db_alfatravel->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOExeption $e) {
  echo $e->getMessage();
}


?>

    <div class="container">
        <div class="left-half">
            <div class="vierkantAchterText magnifier-container">
                <?php include_once('worldmap.html');
                $query = 'SELECT * FROM `bpv`';
                  $sth_bpv = $db_alfatravel->prepare($query);
                  $sth_bpv->execute();
                    while ($bpvID1 = $sth_bpv->fetch(PDO::FETCH_ASSOC)){
                      $bpvID[] = $bpvID1['Land_ID'];
                    }
                    foreach ($bpvID as $key => $item) {
                      echo '<style type="text/css">';
                      echo "#" . $item . "{ fill: #ce0000; cursor: pointer;} ";
                      echo "</style>";
                      // echo "<script> document.getElementById('" . $item . "').setAttribute('method','POST'); </script> ";
                      echo "<script> document.getElementById('" . $item . "').setAttribute('onclick','myFunction(\'". $item ."\')'); </script>";
                    }
                    // while ($bpv1 = $sth_bpv->fetch(PDO::FETCH_ASSOC)){
                    //       $bpv[] = $bpv1['land'];
                    // }
                    // foreach ($bpv as $key => $item){
                      
                    // }
                  $sth_bpv = $db_alfatravel->prepare($query);
                  $sth_bpv->execute();
                ?>
                <div class="box">   
<!--<div class="search"><h2>Landen zoeken</h2><input type="text" placeholder="Zoeken"></div> -->
                  <div>
                    <h2>Lijst met landen</h2>
                      <form method="post" action="" id="taskOption">
                      <select name="taskOption" id="optie" >
                      <option value="Geen">Geen</option>
                      <?php

                        while ($bpv1 = $sth_bpv->fetch(PDO::FETCH_ASSOC)){
                          $bpv[] = $bpv1['land'];
                        }
                        foreach ($bpv as $key => $item){
                          echo "<option value=" . $item . ">" . $item . "</option>";
                        }
                        while ($bpvID1 = $sth_bpv->fetch(PDO::FETCH_ASSOC)){
                          $bpvID[] = $bpvID1['Land_ID'];
                        }
                        foreach ($bpvID as $key => $item) {
                          echo "<option style='display: none;' value=" . $item . ">" . $item . "</option>";
                        }
                        ?>
<!--                       <option value="ES"></option> -->
                      </select>
                      <input type="submit" value="Bekijken"/>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <div class="vierkantAchterText"style="padding-top: 0;">
          <br>
            <div class="right-half">
              <div class="vierkantAchterText">
                <div id="info">
                  <?php
                    if(!isset($_POST['taskOption']) || $_POST['taskOption'] == "Geen"){
                      echo "<h2>Kies een land waar je meer informatie over zou willen</h2>
                      <p>Je kunt een land kiezen door er 1 aan te klikken op de wereldkaart, of door gebruik te maken van de zoekbalk/dropdown-menu hierboven.</p>";
                    }
                    else{
                        $land = $_POST['taskOption'];
                      $query = 'SELECT `tekst` FROM `bpv` WHERE `Land_ID` = "'. $land .'" OR `land` = "'. $land . '"';
                      $sth_bpv = $db_alfatravel->prepare($query);
                      $sth_bpv->execute();
                    while ($landTekst1 = $sth_bpv->fetch(PDO::FETCH_ASSOC)){
                                $landTekst[] = $landTekst1['tekst'];
                    }
                    foreach ($landTekst as $key => $item){
                      echo $item;
                    }
                     
                  ?>
                  <div class="slideshow-container">
                    <?php
                      for ($i=1; $i < 4; $i++) {
                        echo '<div class="mySlides fade">';
                        echo '<img src="images/' . $land . '/afbeelding' . strval($i) . '.png" style="width:100%">';
                        echo "</div>";
                      }
                    ?>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                  </div>
                  <br>
                  <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                  </div>
                  <?php
                    }
                  ?>
                </div>
              </div>
              <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }

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
              </script>
            </div>
          </div>
        </div>
        <script>
function myFunction(item) {
  document.getElementById('optie').value = item;
  document.forms["taskOption"].submit();
}
</script>
