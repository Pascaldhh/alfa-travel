<?php 
class RG 
{
    public $username;
    public $password;
    public $role;
    public $msg = '';

    public function __construct()
    {
        $this->db = new DB();
        if(isset($_POST['username']) && !empty($_POST['username']))
        {
            $this->username = $_POST['username'];
        }
        if(isset($_POST['password']) && !empty($_POST['password']))
        {
            $this->password = $_POST['password'];
        }
        if(isset($_POST['role']) && !empty($_POST['role']))
        {
            $this->role = $_POST['role'];
        }
        $this->Validation();
    }
    public function Validation()
    {
        if(!empty($this->username) && empty($this->password))
        {
            $this->msg = "Please fill in your password!";
            return;
        }
        if(empty($this->username) && !empty($this->password))
        {
            $this->msg = "Please fill in your username!";
            return;
        }
        if(!empty($this->username) && !empty($this->password))
        {
            if($this->UserExists())
            {
                $this->msg = "Username already Exists";
                return;
            }
            header('Location: ?pages=cms&page=users');
            $this->Register();
            exit();
        }
    }
    public function Register()
    {
        $password_hash = password_hash($this->password, PASSWORD_DEFAULT);
        $inputQuery = sprintf("'%s', '%s', '%s'", $this->username, $password_hash, $this->role);
        $this->db->Create('users', "`username`, `password`, `role`", $inputQuery);
    }
    public function UserExists()
    {
        $inputQuery = sprintf("username = '%s'", $this->username);
        $read = $this->db->Read('users', '*', $inputQuery);
        if($read) { return true;}
        return false;
    }
    public function Message()
    {
        echo $this->msg;
    }
}