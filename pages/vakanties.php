<link rel="stylesheet" type="text/css" href="css/vakantie-page.css">
    <div class="container">
        <div class="header-container">
          <img src="images/vakantieBanner.png" alt="" class="header-home">
        </div>
        <div class="left-half">
            <div class="vierkantAchterText">
            <h2><?php echo $db->Read('website_content', 'content', 'page_id = "4" AND id = "21"')[0]['content'];?></h2>
                <p><?php echo $db->Read('website_content', 'content', 'page_id = "4" AND id = "22"')[0]['content'];?></p>
            <h2><?php echo $db->Read('website_content', 'content', 'page_id = "4" AND id = "23"')[0]['content'];?></h2>
                <p><?php echo $db->Read('website_content', 'content', 'page_id = "4" AND id = "24"')[0]['content'];?></p>
                <a href="files/informatiemap_nederland.docx" download><img src="images/driehoek.png" style="margin-right:10px;" width="10" class="driehoekje"><u><i><?php echo $db->Read('website_content', 'content', 'page_id = "4" AND id = "25"')[0]['content'];?></i></u></a> <br>
                <a href="files/informatiemap_europa.docx" download><img src="images/driehoek.png" style="margin-right:10px;" width="10" class="driehoekje"><u><i><?php echo $db->Read('website_content', 'content', 'page_id = "4" AND id = "26"')[0]['content'];?></i></u></a>
                <br><br>
            <h2><?php echo $db->Read('website_content', 'content', 'page_id = "4" AND id = "27"')[0]['content'];?></h2>
                <p><?php echo $db->Read('website_content', 'content', 'page_id = "4" AND id = "28"')[0]['content'];?></p>
                <a href="?page=aanvraagformulier"><img src="images/driehoek.png" style="margin-right:10px;" width="10" class="driehoekje"><u><i><?php echo $db->Read('website_content', 'content', 'page_id = "4" AND id = "29"')[0]['content'];?></i></u></a>
                <div style="display: flex; justify-content: flex-end; margin-top: 50px;">
                    <h3 style="margin: 25px 10px;">Hebt u nog vragen?</h3>
                    <a href="tel:+31883342264"><div class="button"><p>Klik hier om te bellen!</p></div></a>
                </div>
            </div>
        </div>
        <br>
        <h2><?php echo $db->Read('website_content', 'content', 'page_id = "4" AND id = "30"')[0]['content'];?></h2>
        <?php
        include 'databaseuitlezen.php';
            for ($j=1; $j <= $rowCount; $j++) {
              $id = $j;

              $titel = $db->Read('vakanties','titel','id =' . $id);


              $picMain = $db->Read('vakanties','hoofdImg','id =' . $id);

              $text = $db->Read('vakanties','text','id =' . $id);

              $picSub = $db->Read('vakanties','subImg','id =' . $id);
              $picSubCount = $db->Read('vakanties','subimgcount','id =' . $id);


              $picSubR = $picSub[0]["subImg"];
              $picSubD = explode(" ", $picSubR);


              $x = (int)$picSubCount[0]["subimgcount"];



                    echo "<div class='vakantie'>
                    <img src='images/" . $picMain[0]["hoofdImg"] . "' style='height: `190px; width: 100%;'></img>
                    <h2>" . $titel[0]["titel"] . "</h2>
                    <p>" . substr($text[0]["text"] , 0 ,255) . "<b>. . .</b></p>
                    <a href='?page=paginalocatie&id=" . $j . "'><img src='images/driehoek.png' style='margin-right:10px;' width='10px' class='driehoekje'><u><i>Lees meer</i></u></a>
                    </div>";

                    $id = $j;
            }

        ?>
        <div class="right-half">
        </div>
    </div>
</div>
