<?php

class About{
    protected $table;
    protected $primary;

    function __construct(){
        $this->table = 'about';

    }
    function editAbout($about){
        return DB::exec("UPDATE {$this->table} SET about_details = ?",[$about]);
    }

}