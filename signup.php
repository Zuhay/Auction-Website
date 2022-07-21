<?php

require_once('Model/UserDataSet.php');

//Sign up
$cookie_name = "user";
$cookie_value = "Random user";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
$view = new stdClass();
$view->pageTitle = 'Sign up';

$userDataSet = new UserDataSet();

if(isset($_POST['register'])) {
    //get input values
    $name = $_POST['_nameOfUser'];
    $username = $_POST['_username'];
    $userType = $_POST['_userType'];
    $email = $_POST['email'];
    $password = $_POST['_password'];
    $repeatPass = $_POST['_repeatPass'];
    $encryptedPassword = password_hash($repeatPass, PASSWORD_DEFAULT);

    $successfulSignUp = $userDataSet->signup($name, $username, $userType, $email, $password, $encryptedPassword);
    //sign up is success
    if($successfulSignUp){
        $user = $userDataSet->fetchUserDetails($email);
        $_SESSION['email'] = $user->getEmail();
        $_SESSION['userID'] = $user->getUserID();

        header("Location: index.php");
    }
    //sign up failed. Error shown if details entered incorrectly.
    else{
        echo "An error occurred, please try again";
    }


}

require_once('View/signup.phtml');
