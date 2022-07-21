<?php


class UserData
{
    protected $_userId, $_nameOfUser, $_username, $_email, $_password, $_userType, $_loggedIn;

    public function __construct($dbRow)
    {
        $this->_userId = $dbRow['_userId'];
        $this->_nameOfUser = $dbRow['_nameOfUser'];
        $this->_username = $dbRow['_username'];
        $this->_email = $dbRow['_email'];
        $this->_password = $dbRow['_password'];
        $this->_userType = $dbRow['_userType'];
        $this->_loggedIn = $dbRow['_loggedIn'];

    }

    public function getUserId()
    {
        return $this->_userId;
    }

    public function getNameOfUser()
    {
        return $this->_nameOfUser;
    }

    public function getUsername()
    {
        return $this->_username;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function getPassword()
    {
        return $this->_password;
    }

    public function isLoggedIn()
    {
        return $this->_loggedIn;
    }


    public function Authenticate($_email, $_password)
    {
        $user = new UserDataSet();
        $userDataSet = $user->checkUserCredentials($_email, $_password);
        if (count($userDataSet) > 0) {
            $_SESSION["login"];
            $_SESSION["userId"] = $userDataSet[0]->getUserId();
            $this->_loggedIn = true;
            $this->_email = $_email;
            $this->_userId = $userDataSet[0]->getUserId();
            return true;
        } else {
            $this->_loggedIn = false;
            return false;
        }
    }

    public function logout(){
        unset($_SESSION["login"]);
        unset($_SESSION["userId"]);
        $this->_loggedIn = false;
        $this->_username = "No user";
        $this->_userId = "0";
        session_destroy();
    }
}