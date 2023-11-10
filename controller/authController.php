<?php 
include("../include/config.php");

$auth=new Auth();
if (isset($_POST["register"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $pass2 = $_POST["password2"];
    $encrypt = sha1(md5($pass));

    $control =$auth->controlEmail($email);

    if (!$name || !$email || !$pass || !$pass2) {
        echo "bos";
    } else if ($control) {
        echo "hata";
    } else if ($pass !== $pass2) {
        echo "hataPass";
    } else {
        $insert=$auth->addUser($name,$email,$encrypt);
        echo "ok";
    }
}
if(isset($_POST["login"])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $encrypt = sha1(md5($pass));

    $login=$auth->login($email,$encrypt);
    if($login){
        $_SESSION["user"] = $login->id;
        echo "ok";
    }else if(!$login){
        echo "hata";
    }else{
        echo "bos";
    }
}
if(isset($_POST["logout"])) {
    session_unset();
    echo "ok";
    exit();
}
