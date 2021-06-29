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
            exit();
        }
    }
    public function succesfully()
    {
        echo $this->succes;
    }
}
