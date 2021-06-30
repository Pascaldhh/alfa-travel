<link rel="stylesheet" href="css/contact-page.css">
<div class="container">
  <div class="header-container">
    <img src="images/wolken.jpeg" alt="" id="wolkenfoto">
  </div>
  <div id="boxje">
  <div class="vierkantAchterText">
    <h2><?php echo $db->Read('website_content', 'content', 'page_id = "6" AND id = "37"')[0]['content'];?></h2><br>
    <p><?php echo $db->Read('website_content', 'content', 'page_id = "6" AND id = "38"')[0]['content'];?></p>

      <p><?php echo $db->Read('website_content', 'content', 'page_id = "6" AND id = "39"')[0]['content'];?><br><br>
      <ul><?php echo $db->Read('website_content', 'content', 'page_id = "6" AND id = "40"')[0]['content'];?></ul>
      <br><?php echo $db->Read('website_content', 'content', 'page_id = "6" AND id = "41"')[0]['content'];?></p>
      <a href="tel:+31-0883342264"><div class="button"><p>Klik hier om te bellen!</p></div></a>
    </div>
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d310392.8725229353!2d6.3667475546224015!3d52.57061823386614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c801c464c8c6b3%3A0xeff41e8f8f258a7d!2sAlfa-college%20Hardenberg!5e0!3m2!1snl!2snl!4v1623663495404!5m2!1snl!2snl"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</div>
