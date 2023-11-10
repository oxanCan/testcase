<?php

class Blogadmin{
    protected $table;
    protected $primary;

    function __construct(){
        $this->table = 'blog';
        $this->primary = 'blog_id';
    }
    function addBlog($text, $title, $short_tag, $categoryText){
        return DB::insert('INSERT INTO blog (blog_text, title, short_tag, category_id) VALUES (?, ?, ?, ?)', [$text, $title, $short_tag, $categoryText]);
    }
    function deleteBlog($blog_id){
        return DB::exec('DELETE FROM blog WHERE blog_id = ?', [$blog_id]);
    }
    function editBlog($title, $short_tag, $text, $blog_id){
        return DB::exec("UPDATE blog SET title = ?, short_tag = ?, blog_text = ? WHERE blog_id = ?",
        [$title, $short_tag, $text, $blog_id]);
    }
    function editContact($contact){
        return DB::exec("UPDATE contact SET contact_details = ?",[$contact]);
    }
    function getBlog(){
        return DB::get("SELECT * FROM blog"); 
    }

}