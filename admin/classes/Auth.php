<?php

class Authadmin{
    protected $table;
    protected $primary;

    function __construct(){
        $this->table = 'users';
        $this->primary = 'user_id';
    }
    function login($email,$encrypt){
        return DB::getRow('SELECT user_id, role_id FROM users WHERE user_mail=? AND user_password=?',[$email,$encrypt]);
    }
    function control($email){
        return DB::get("SELECT * FROM users WHERE user_mail=?",[$email]);
    }
    function addMod($name,$email,$phone,$encrypt){
        return DB::insert("INSERT INTO users(user_name,user_phone,user_mail,user_password) VALUES(?,?,?,?)",[$name,$email,$phone,$encrypt]);
    }
}