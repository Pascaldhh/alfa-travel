<?php 
class LN
{
    private $username;
    private $password;
    private $msg = "";
    public function __construct()
    {
        $this->db = new DB();
        if(isset($_POST['user']))
        {
            $this->username = $_POST['user'];
        }
        if(isset($_POST['pass']))
        {
            $this->password = $_POST['pass'];
        }
        $this->checkIfCorrectInput();
        $this->userLogin();
    }
    public function checkIfCorrectInput()
    {
        if(!empty($this->username) && empty($this->password))
        {
            $this->msg = "Please fill in your password!";
        }
        if(empty($this->username) && !empty($this->password))
        {
            $this->msg = "Please fill in your username!";
        }
    }
    public function userLogin()
    {
        if(isset($_SESSION['logged-in'])) {
            header('Location: ?pages=cms&page=home');
            exit();
        }
        if(!empty($this->username) && !empty($this->password))
        {
            $queryLogin = $this->db->Read('users', '*', sprintf('username = "%s"', $this->username));
            if($queryLogin && password_verify($this->password, $queryLogin[0]['password']))
            {
                $_SESSION['logged-in'] = true;
                $_SESSION['user'] = $this->username;
                header('Location: ?pages=cms&=home');
                exit();
            } else {
                $this->msg = "Username or Password invalid, try again!";
            }
        }
    }
    public function displayMsg()
    {
        echo $this->msg;
    }
}