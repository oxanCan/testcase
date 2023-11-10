<?php

class Blog{
    protected $table;
    protected $primary;

    function __construct(){
        $this->table = 'blog';
        $this->primary = 'blog_id';

    }

    function getBlog($id){
        return DB::get("SELECT * FROM {$this->table} WHERE category_id LIKE '%$id%' ");
    }


}