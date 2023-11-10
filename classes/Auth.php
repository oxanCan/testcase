<?php

class Auth{
    protected $table;
    protected $primary;

    function __construct(){
        $this->table = 'blog_users';
        $this->primary = 'id';

    }

    function controlEmail($email){
        return  DB::get("SELECT * FROM {$this->table} WHERE email=?", [$email]);
    }
    function addUser($name,$email,$encrypt){
        return DB::insert("INSERT INTO blog_users (name,email,password) VALUES (?,?,?)", [$name,$email,$encrypt]);
    }
    function login($email,$encrypt){
        return DB::getRow("SELECT id FROM blog_users WHERE email=? AND password=?",[$email,$encrypt]);
    }  
 
}