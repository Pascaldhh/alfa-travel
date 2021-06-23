<link rel="stylesheet" type="text/css" href="css/formulier-page.css">
<?php 
class MH
{
    public $fn;
    public $ln;
    public $mail;
    public $msg;
    public $to = "hiddehoek12@gmail.com";
    public $subject = "Form send";
    public $succes = "";

    public function __construct()
    {
        if(isset($_POST['fname']))
        {
            $this->fn = $_POST['fname'];
        }
        if(isset($_POST['lname']))
        {
            $this->ln = $_POST['lname'];
        }
        if(isset($_POST['email']))
        {
            $this->mail = $_POST['email'];
        }
        if(isset($_POST['message']))
        {
            $this->msg = $_POST['message'];
        }
    }
    public function sendMail()
    {
        if(isset($_POST['submit']))
        {
            mail($this->to, $this->subject, $this->msg, sprintf("From: %s", $this->mail));
            $this->succes = "Mail sent succesfully!";
            header("Location: ?page=formulier-bedank-pagina");
            echo "halloekdwkedkáwendfcl'kwenflwkenfclawjenfljawenlfknawlkefnlkwenlfknawelfnalwkenfkawnefkcnawemfnamwenflkawejficajwdfkcmawe,dnefalwenflkanewlkfnaw.emnflawkeflkaewnf";
        }
    }
    public function succesfully()
    {
        echo $this->succes;
    }
}
?>
<?php $mail = new MH();  $mail->sendMail(); ?>

    <div class="container">
        <block>
        <div class="left-half">
            <div class="vierkantAchterText">
                <div class="formulier">
                    <form action="" method="post">  
                        <h2>Mail-formulier</h2><br>
                        <label for="fname">Voornaam:</label>
                        <input type="text" id="fname" name="fname" required><br><br>
                        <label for="lname">Achternaam:</label>
                        <input type="text" id="lname" name="lname" required><br><br>
                        <label for="e-mail">E-mail adres:</label>
                        <input type="text" id="email" name="e-mail" required><br><br>
                        <label for="email"></label>

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


