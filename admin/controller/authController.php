<?php
include '../include/config.php';
$auth=new Authadmin();
if(isset($_POST["logout"])) {
  
    session_unset();
    echo "ok";
    exit();
}

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $encrypt = sha1(md5($pass));
    $login=$auth->login($email,$encrypt); 

    if($login){
        $_SESSION["user"] = $login->user_id;
        $_SESSION["role_id"] = $login->role_id;
        echo "ok";
    }else if(!$email|| !$pass){
        echo "bos";
    } else {
        echo "hata";
    }
            
} 
?>