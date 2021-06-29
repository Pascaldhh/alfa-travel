<link rel="stylesheet" type="text/css" href="css/formulier-page.css">

<?php $mail = new MH();  $mail->sendMail(); ?>

    <div class="container">
        <block>
        <div class="left-half">
            <div class="vierkantAchterText">
                <div class="formulier">
                    <form method="post">  
                        <h2><?php echo $db->Read('website_content', 'content', 'page_id = "5" AND id = "31"')[0]['content'];?></h2><br>
                        <label for="fname"><?php echo $db->Read('website_content', 'content', 'page_id = "5" AND id = "32"')[0]['content'];?></label>
                        <input type="text" id="fname" name="fname" required><br><br>
                        <label for="lname"><?php echo $db->Read('website_content', 'content', 'page_id = "5" AND id = "33"')[0]['content'];?></label>
                        <input type="text" id="lname" name="lname" required><br><br>
                        <label for="e-mail"><?php echo $db->Read('website_content', 'content', 'page_id = "5" AND id = "34"')[0]['content'];?></label>
                        <input type="text" id="email" name="e-mail" required><br><br>
                        <label for="email"></label>

                        <input type="radio" id="vakantie" name="betreft" value="Vakantie">
                        <label for="male">Vakantie</label><br>
                        <input type="radio" id="vak-excursie" name="betreft" value="Vak-excursie">
                        <label for="female">Vak-excursie</label><br>
                        <input type="radio" id="bpv" name="betreft" value="Bpv">
                        <label for="other">Bpv</label>
                        
                        <br><br>
                        <textarea name="message" rows="4" cols="50" placeholder="<?php echo $db->Read('website_content', 'content', 'page_id = "5" AND id = "35"')[0]['content'];?>"></textarea>
                        <br>
                        <input type="submit" name="submit" value="<?php echo $db->Read('website_content', 'content', 'page_id = "5" AND id = "36"')[0]['content'];?>" >
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div class="right-half">
        </div>
    </div>
</div>

