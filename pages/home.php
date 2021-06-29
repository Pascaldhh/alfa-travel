<link rel="stylesheet" type="text/css" href="css/home-page.css">
<div class="container">
    <div class="header-container">
        <img src="images/header-home.jpg" alt="" class="header-home">
    </div>
        <div class="text-home over-ons">
            <div class="vierkantAchterText" style="flex:1;">
                <h2 style="margin-bottom:10px;"><?php echo $db->Read('website_content', 'content', 'page_id = "1" AND id = "1"')[0]['content'];?></h2>
                <p><?php echo $db->Read('website_content', 'content', 'page_id = "1" AND id = "2"')[0]['content'];?></p>
            </div>
            <div class="video" style="flex:.7; display:flex; justify-content:center; align-items:center; padding:10px;">
                <video controls style="width:100%;">
                    <source src="files/promo-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    <div class="left-half ">
        <div class="blocks">
            <img class="block__img" src="images/loc-gebouw-map.jpg">
            <div class="text-home">
                <div class="vierkantAchterText">
                    <h2><b><?php echo $db->Read('website_content', 'content', 'page_id = "1" AND id = "3"')[0]['content'];?></b></h2>
                    <p class="text-home-1" style="padding-top:20px; margin: 10px;">
                    <?php echo $db->Read('website_content', 'content', 'page_id = "1" AND id = "4"')[0]['content'];?>
                </p>
                </div>
                <div class="vierkantAchterText">
                    <a href="?page=formulier"><img src="images/driehoek.png" style="margin-right:10px;" width="10" class="driehoekje"><u><i>
                    <?php echo $db->Read('website_content', 'content', 'page_id = "1" AND id = "5"')[0]['content'];?>
                    </i></u></a>
                </div>
            </div>
        </div>
    </div>
    <div class="right-half">
        <div class="blocks">
            <div class="text-home">
                <div class="vierkantAchterText">
                    <h2><b><?php echo $db->Read('website_content', 'content', 'page_id = "1" AND id = "6"')[0]['content'];?></b></h2>
                    <p class="text-home-1" style="padding-top:20px; margin:10px;">
                        <?php echo $db->Read('website_content', 'content', 'page_id = "1" AND id = "7"')[0]['content'];?>
                    </p>
                </div>
                <div class="vierkantAchterText">
                    <a href="?page=formulier"><img src="images/driehoek.png" style="margin-right:10px;" width="10" class="driehoekje"><u><i>
                    <?php echo $db->Read('website_content', 'content', 'page_id = "1" AND id = "8"')[0]['content'];?>
                    </i></u></a>
                </div>
            </div>
            <img class="block__img" src="images/vliegtuig.jpg">
        </div>
    </div>
</div>