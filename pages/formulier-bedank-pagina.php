<link rel="stylesheet" type="text/css" href="css/formulier-page.css">
    <div class="container">
        <block>
        <div class="left-half">
            <div class="vierkantAchterText">
                <div class="bedank">
                    <div>
                        <h1>Bedankt!</h1><br>
                        <h2>De mail is verstuurd met uw informatie.</h2>
                        <h2>Je krijgt spoedig een bevestigingsmail!</h2>
                        <img src="images/bedankster.gif" style=" width: 60%;">
                        <h2>U wordt doorverwezen naar de home-pagina.</h2>
                        <div id="progressBar">
                            <div id="bar"></div>
                        </div>

                        <script>
                            var progress = 1;
                                setInterval(function timer() {
                                    if (progress > 97) {
                                        window.location.href = "http://localhost/alfaTravel/alfa-travel/?";
                                    }
                                        if (progress < 100) {
                                            document.getElementById("bar").style.width = String(progress) + "%";
                                            progress = progress + 0.2;
                                        }
                                    }
                            , 15)     
                            window.onload = function() {
                                timer();
                            };
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="right-half">
        </div>
    </div>
</div>