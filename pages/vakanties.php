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
    $vakantie = $db->Read('vakanties', '*', 1);
    foreach ($vakantie as $item) {
        echo "<div class='vakantie'>
                    <img src='images/" . $item["hoofdImg"] . "' style='height: `190px; width: 100%;'>
                    <h2>" . $item["titel"] . "</h2>
                    <p>" . substr($item["text"] , 0 ,255) . "<b>. . .</b></p>
                    <a href='?page=paginalocatie&id=" . $item['id'] . "'><img src='images/driehoek.png' style='margin-right:10px;' width='10px' class='driehoekje'><u><i>Lees meer</i></u></a>
                    </div>";
    }
    ?>
    <div class="right-half">
    </div>
</div>
</div>