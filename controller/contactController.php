<?php
include "../include/config.php";
$contact=new Contact();
if(isset($_POST["addContact"])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $message= $_POST['message'];
    if(!$message||!$email || !$phone || !$name ){
        echo "bos";
    }else{
        $addContact=$contact->addContact($name,$email,$phone,$message);
        echo "ok";
    }

    }
?>