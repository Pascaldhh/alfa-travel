<link rel="stylesheet" type="text/css" href="css/vakantie-page.css">
    <div class="container">
        <block>
        <div class="left-half">
            <div class="vierkantAchterText">
            <h2>Vakanties</h2>
                <p>Van een stedentripje naar London, cruisevakantie naar Bali of een roadtrip door de VS, bij Alfa-travel helpen wij u graag verder.
                Terwijl u zich bezig houdt met de dagelijkse taken, gaan wij bij Alfa-travel bezig met uw vakantie. Aan de hand van uw wensen stellen wij de perfecte vakantie samen.</p>
            <h2>Hoe gaan wij te werk</h2>
                <p>Via het aanmeldformulier en/of een persoonlijk gesprek kunt u uw wensen aan ons doorgeven. Aan de hand daarvan maken wij voor u een op maat gemaakte reisvoorstel. Deze kunt u rustig doorlezen en bespreken met uw collega’s. Samen met u besprek wij het reisvoorstel, eventuele aanmerkingen kunnen dan worden besproken. Gaat u akkoord met het voorstel, dan kunnen wij u helpen met het uitvoeren van de reis. <br>
                Wij hebben als reisbureau niet de bevoegdheid om contracten met bedrijven aan te gaan (boeken van de vakantie). Dit moet u zelf regelen!</p>
                <a href=""><img src="images/driehoek.png" style="margin-right:10px;" width="10" class="driehoekje"><u><i>Klik hier om de informatiemap <b>NEDERLAND</b> te downloaden</i></u></a> <br>
                <a href=""><img src="images/driehoek.png" style="margin-right:10px;" width="10" class="driehoekje"><u><i>Klik hier om de informatiemap <b>EUROPA</b> te downloaden</i></u></a>
                <br><br>
            <h2>Vakantie aanvragen</h2>
                <p>Vul hier gemakkelijk en snel een aanvraagformulier in en wij helpen jou met het uitwerken van je ultieme reis!</p>
                <a href=""><img src="images/driehoek.png" style="margin-right:10px;" width="10" class="driehoekje"><u><i>Klik hier voor het aanvraagformulier</i></u></a>
            </div>
        </div>
        <br>
        <h2>Voorbeeld vakanties</h2>
        <?php
            for ($j=0; $j < 4; $j++) {
                echo "<div class='row'>";
                for ($i=0; $i < 3; $i++) { 
                    echo "<div class='vakantie'>
                    <img src='images/testafbeelding.jpg' style='width: 100%;'></img>
                    <h2>vakantie bestemming</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua  <b>. . .</b></p>
                    <a href=''><img src='images/driehoek.png' style='margin-right:10px;' width='10px' class='driehoekje'><u><i>Lees meer</i></u></a>
                    </div>";
                }
                echo "</div>";
            }  
        ?>
        <div class="right-half">
        </div>
    </div>
</div>