<link rel="stylesheet" type="text/css" href="css/vakantie-page.css">
    <div class="container">
        <block>
        <div class="left-half">
            <div class="vierkantAchterText">
            <h2><?php echo $db->Read('website_content', 'content', 'page_id = "3" AND id = "12"')[0]['content'];?></h2>
                <p><?php echo $db->Read('website_content', 'content', 'page_id = "3" AND id = "13"')[0]['content'];?></p>
            <h2><?php echo $db->Read('website_content', 'content', 'page_id = "3" AND id = "14"')[0]['content'];?></h2>
                <p><?php echo $db->Read('website_content', 'content', 'page_id = "3" AND id = "15"')[0]['content'];?></p>
                <a href="files/informatiemap_nederland.pdf" download><img src="images/driehoek.png" style="margin-right:10px;" width="10" class="driehoekje"><u><i><?php echo $db->Read('website_content', 'content', 'page_id = "3" AND id = "16"')[0]['content'];?></i></u></a> <br>
                <a href="files/informatiemap_europa.pdf" download><img src="images/driehoek.png" style="margin-right:10px;" width="10" class="driehoekje"><u><i><?php echo $db->Read('website_content', 'content', 'page_id = "3" AND id = "17"')[0]['content'];?></i></u></a>
                <br><br>
            <h2><?php echo $db->Read('website_content', 'content', 'page_id = "3" AND id = "18"')[0]['content'];?></h2>
                <p><?php echo $db->Read('website_content', 'content', 'page_id = "3" AND id = "19"')[0]['content'];?></p>
                <a href="?page=formulier"><img src="images/driehoek.png" style="margin-right:10px;" width="10" class="driehoekje"><u><i><?php echo $db->Read('website_content', 'content', 'page_id = "3" AND id = "20"')[0]['content'];?></i></u></a>
            </div>
        </div>
        <br>
        <div class="right-half">
        </div>
    </div>
</div>