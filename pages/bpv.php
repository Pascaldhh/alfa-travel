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
        <block>
        <div class="left-half">
            <div class="vierkantAchterText">
                <?php include_once('worldmap.html');
                $query = 'SELECT `Land_ID`, `land` FROM `bpv`';
                          $sth_bpv = $db_alfatravel->prepare($query);
                          $sth_bpv->execute();

                          while ($bpvID1 = $sth_bpv->fetch(PDO::FETCH_ASSOC)){
                            $bpvID[] = $bpvID1['Land_ID'];
                          }
                          echo '<style type="text/css">';
                            foreach ($bpvID as $key => $item) {
                              echo "#" . $item . "{ fill: #ce0000;} ";
                            }
                          echo "</style>";
                  $sth_bpv = $db_alfatravel->prepare($query);
                  $sth_bpv->execute();
                ?>

            </div>
        </div>
        <div class="vierkantAchterText">
            <div class="box">   
                <div class="search">
                    <h2>Landen zoeken</h2>
                    <input type="text" placeholder="Zoeken">
                </div>
                <div>
                    <h2>Lijst met landen</h2>
                    <select name="cars" id="cars">
                      <?php
                          while ($bpv1 = $sth_bpv->fetch(PDO::FETCH_ASSOC)){
                            $bpv[] = $bpv1['land'];
                          }
                            foreach ($bpv as $key => $item) {
                              echo "<option value=" . $item . ">" . $item . "</option>";;
                            }
                      ?>
                        
                    </select>
                </div>
            </div>
        <br>
        <div class="right-half">
            <div class="vierkantAchterText">
                <div id="info">
                    <h1>Naam van land</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                          <img src="images/header-home.jpg" style="width:100%">
                        </div>
                        <div class="mySlides fade">
                          <img src="images/vliegtuig.jpg" style="width:100%">
                        </div>
                        <div class="mySlides fade">
                          <img src="images/loc-gebouw-map.jpg" style="width:100%">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        </div>
                        <br>

                        <div style="text-align:center">
                          <span class="dot" onclick="currentSlide(1)"></span> 
                          <span class="dot" onclick="currentSlide(2)"></span> 
                          <span class="dot" onclick="currentSlide(3)"></span> 
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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