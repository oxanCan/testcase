<?php
include("../include/config.php");
$class= new Authadmin;

if(isset($_POST["addMod"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["pass"];
    $phone=$_POST["phone"];
    $encrypt = sha1(md5($password));

    $control=$class->control($email);
    if($control){
        echo "hata";
    }else if(!$name || !$email || !$password || !$phone) {
        echo "bos";
    }else{
        $add=$class->addMod($name,$email,$phone,$encrypt);
        echo "ok";
    }
}