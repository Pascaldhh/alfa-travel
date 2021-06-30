<?php 
class MH
{
    public $fn;
    public $ln;
    public $mail;
    public $betreft;
    public $msg;
    public $to = "jp.dehaan@student.alfa-college.nl";
    public $headers = 'From: website@alfa-travel.nl' . "\r\n" .
    'Reply-To: reisbureau.park@alfa-college.nl';
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
        if(isset($_POST['email']))
        {
            $this->mail = $_POST['email'];
        }
        if(isset($_POST['betreft']))
        {
            $this->betreft = $_POST['betreft'];
        }
        if(isset($_POST['message']))
        {
            $this->msg = $_POST['message'];
        }
        $this->subject = "Aanvraag formulier website " . $this->fn . ": " . $this->betreft;
    }
    public function sendMail()
    {
        if(isset($_POST['submit']))
        {
            mail($this->to, $this->subject, $this->msg, $this->headers);
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
