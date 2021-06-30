<link rel="stylesheet" type="text/css" href="css/bpv.css">

    <div class="container">
      <div class="left-half">
        <div class="vierkantAchterText magnifier-container">
          <?php include_once(sprintf('world-map%sindex.php', DS)); ?>
          <div class="box">   
            <div>
              <h2><?php echo $db->Read('website_content', 'content', 'page_id = "2" AND id = "9"')[0]['content'];?></h2>
                <form method="get" id="country">
                  <input type="hidden" name="page" value="bpv" />
                  <select name="country" id="optie" >
                    <option value="geen">Geen</option>
                    <?php 
                      $read = $db->Read('location', 'Land');
                      foreach($read as $item)
                      {
                        echo '<option value="'.strtolower($item['Land']).'">'.$item['Land'].'</option>';
                      } 
                    ?>
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
                  if(empty($_GET['country']) || $_GET['country'] == "geen"){
                    echo "<h2>" . $db->Read('website_content', 'content', 'page_id = "2" AND id = "10"')[0]['content'] . "</h2>
                    <p>" . $db->Read('website_content', 'content', 'page_id = "2" AND id = "11"')[0]['content'] ."</p>";
                  } else { 
                    $land = $_GET['country'];
                    $read2 = $db->Read('location', 'tekst', sprintf('LandCode ="%s" OR Land = "%s"', $land, $land));
                    foreach ($read2 as $item){
                      echo $item['tekst'];
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
                // showSlides(slideIndex);

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
