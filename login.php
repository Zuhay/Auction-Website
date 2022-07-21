<?php

require_once ('Model/UserDataSet.php');


session_start();

$userDataSet = new UserDataSet();

//Login
if(isset($_POST['loginButton'])) {
    //$view->login = "Login button pressed";
    $email = $_POST['email'];
    $password = $_POST['password'];
    //check if the login details are correct
    $verified = $userDataSet->verifyLoginDetails($email, $password);
    // if the login details are correct, log the user in
    if($verified == true){
//      create a session for the user
        $_SESSION['email'] = $email;
        $user = $userDataSet->fetchUserDetails($email);
        $_SESSION['userID'] = $user->getUserID();
        echo "log in success";
        header("Location: index.php");
    }else{
        $view->loginError = "Wrong username or password, try again. ";
    }
}

// if the logout button was pressed
if(isset($_GET["logout"]) && !isset($_POST["loginBtn"])) {
    //end the session
    unset($_SESSION["email"]);
    unset($_SESSION["userID"]);
    //destroy the session
    session_destroy();
}


require_once('View/login.phtml');
