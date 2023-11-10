<?php

class Contactadmin{
    protected $table;
    protected $primary;

    function __construct(){
        $this->table = 'contact';

    }
    function getContact(){
        return DB::get("SELECT * FROM contact ORDER BY status ASC");
    }
    function checkContact($contact_id){
        return DB::exec('UPDATE contact SET status = "1" WHERE contact_id = ?', [$contact_id]);
    }
}