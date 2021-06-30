<?php 
class MH
{
    public $fn;
    public $ln;
    public $mail;
    public $betreft;
    public $msg;
    public $bericht;
    public $to = "reisbureau.park@alfa-college.nl";
    public $headers = [];
    public $subject;
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
        if(isset($_POST['e-mail']))
        {
            $this->mail = $_POST['e-mail'];
        }
        if(isset($_POST['betreft']))
        {
            $this->betreft = $_POST['betreft'];
        }
        if(isset($_POST['message']))
        {
            $this->bericht = $_POST['message'];
        }
        $this->subject = "Aanvraag formulier website " . $this->fn . ": " . $this->betreft;
        $this->headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $this->headers[] = 'From: website@alfa-travel.nl';
        $this->headers[] = 'Reply-To: reisbureau.park@alfa-college.nl';
        $this->headers[] = 'Cc: ' . $this->mail;
        $this->msg[] = '<style>body{font-size:16px; line-height:1.6;}</style>';
        $this->msg[] = '<b>Voornaam</b>: ' . $this->fn;
        $this->msg[] = '<b>Achternaam</b>: ' . $this->ln;
        $this->msg[] = '<b>E-mail:</b> ' . $this->mail;
        $this->msg[] = '<b>Betreft:</b> ' . $this->betreft;
        $this->msg[] = '<b>Bericht:</b> ' . "<br>" . $this->bericht;

    }
    public function sendMail()
    {
        if(isset($_POST['submit']))
        {
            mail($this->to, $this->subject, implode("<br>", $this->msg), implode("\r\n", $this->headers));
            $this->succes = "Mail sent succesfully!";
            header("Location: ?page=formulier-bedank-pagina");
            exit();
        }
    }
    public function succesfully()
    {
        echo $this->succes;
    }
}
