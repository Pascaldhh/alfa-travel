<link rel="stylesheet" type="text/css" href="css/formulier-page.css">
    <div class="container">
        <block>
        <div class="left-half">
            <div class="vierkantAchterText">
                <div class="formulier">
                    <form action="/action_page.php">
                        <h2>Mail-formulier</h2><br>
                        <label for="fname">Voornaam:</label>
                        <input type="text" id="fname" name="fname" required><br><br>
                        <label for="lname">Achternaam:</label>
                        <input type="text" id="lname" name="lname" required><br><br>
                        <label for="e-mail">E-mail adres:</label>
                        <input type="text" id="lname" name="e-mail" required><br><br>
                        <label for="lname"></label>

                        <input type="radio" id="vakantie" name="betreft" value="Vakantie">
                        <label for="male">Vakantie</label><br>
                        <input type="radio" id="vak-excursie" name="betreft" value="Vak-excursie">
                        <label for="female">Vak-excursie</label><br>
                        <input type="radio" id="bpv" name="betreft" value="Bpv">
                        <label for="other">Bpv</label>
                        <br><br>
                        <textarea name="message" rows="4" cols="50" placeholder="Vul hier een korte beschrijving in"></textarea>
                        <br>
                        <input type="submit" value="Verzenden" required>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div class="right-half">
        </div>
    </div>
</div>