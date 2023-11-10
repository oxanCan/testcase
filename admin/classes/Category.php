<?php

class Category{
    protected $table;
    protected $primary;

    function __construct(){
        $this->table = 'category';

    }
    function deleteCategory($id){
        return DB::exec("DELETE FROM categories WHERE id=?",[$id]);    
    }
    function addControl($category){
        return DB::get("SELECT * FROM categories WHERE name=?",[$category]);
    }
    function addCategory($category){
        return DB::insert("INSERT INTO categories (name) VALUES(?)",[$category]);
    }
    function getCategories(){
        return DB::get("SELECT * FROM categories");
    }
    
}

