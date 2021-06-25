<?php $db = new DB(); ?>
<link rel="stylesheet" type="text/css" href="css/home-page.css">
<div class="container">
    <div class="header-container">
        <img src="images/header-home.jpg" alt="" class="header-home">
    </div>
    <div class="left-half ">
        <div class="blocks">
            <img class="block__img" src="images/loc-gebouw-map.jpg">
            <div class="text-home">
                <div class="vierkantAchterText">
                    <h2><b><?php echo $db->Read('website_content', 'content1', 'page_id = "1"')[0]['content1']; ?></b></h2>
                    <p class="text-home-1" style="padding-top:20px; margin: 10px;">
                    <?php echo $db->Read('website_content', 'content2', 'page_id = "1"')[0]['content2']; ?>
                </p>
                </div>
                <div class="vierkantAchterText">
                    <a href=""><img src="images/driehoek.png" style="margin-right:10px;" width="10" class="driehoekje"><u><i>
                        <?php echo $db->Read('website_content', 'content3', 'page_id = "1"')[0]['content3']; ?>
                    </i></u></a>
                </div>
            </div>
        </div>
    </div>
    <div class="right-half">
        <div class="blocks">
            <div class="text-home">
                <div class="vierkantAchterText">
                    <h2><b><?php echo $db->Read('website_content', 'content1', 'page_id = "1"')[1]['content1']; ?></b></h2>
                    <p class="text-home-1" style="padding-top:20px; margin:10px;">
                    <?php echo $db->Read('website_content', 'content2', 'page_id = "1"')[1]['content2']; ?>
                    </p>
                </div>
                <div class="vierkantAchterText">
                    <a href=""><img src="images/driehoek.png" style="margin-right:10px;" width="10" class="driehoekje"><u><i>
                    <?php echo $db->Read('website_content', 'content3', 'page_id = "1"')[1]['content3']; ?>
                    </i></u></a>
                </div>
            </div>
            <img class="block__img" src="images/vliegtuig.jpg">
        </div>
    </div>
</div>