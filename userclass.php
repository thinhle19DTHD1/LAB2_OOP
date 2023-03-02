<?php 
    require_once("helpers.php");


class user
{
    private $username;
    private $userEmail;
    private $userID;
    private $status;

    public function __construct($newuser, $email){
        $this->username = $newuser;
        $this->userEmail = $email;
        $this->status = 1;
        $this->userID = GetNextUserID();
    }
    public function __destruct(){
        $this->username = NULL;
        $this->userEmail = NULL;
        $this->status = NULL;
        $this->userID = NULL;
    }
    public function GetuserName()
    {
        return $this->username;
    }
    public function GetUserEmail()
    {
        return $this->userEmail;
    }
    public function GetUserID()
    {
        return $this->userID;
    }
    public function GetStatus()
    {
        return $this->status;
    }
    public function SetUserStatus($input){
        if($input > 1 || $input <0){
            return false;
        }
        $this->status = $input;
        return true;
    }
}
?>