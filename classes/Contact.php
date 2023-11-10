<?php

class Contact{
    protected $table;
    protected $primary;

    function __construct(){
        $this->table = 'contact';
        $this->primary = 'contact_id';

    }

    function addContact($name,$email,$phone,$message){
        return DB::insert("INSERT INTO {$this->table} (contact_name,contact_mail,contact_phone,contact_message) VALUES (?,?,?,?)",[$name,$email,$phone,$message]);
    }

}