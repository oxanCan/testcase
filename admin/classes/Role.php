<?php

class Role{
    protected $table;
    protected $primary;

    function __construct(){
        $this->table = 'roles';

    }
    function getRoles(){
        return  DB::get("SELECT * FROM roles ORDER BY id desc");
    }
    function getPages(){
        return DB::get("SELECT * FROM pages WHERE parent_id > 0");
    }
    function checkPermission($page_id,$id){
        return DB::get("SELECT * FROM permission WHERE page_id=? AND role_id=?", [$page_id,$id]);
    }
    function updateNotCheck($in,$id){
        return DB::exec("UPDATE permission SET control='0' WHERE page_id=? AND role_id=?",[$in,$id]);
    }
    function controlCheck($i,$id){
       return DB::get("SELECT * FROM permission WHERE page_id=? AND role_id=?",[$i,$id]);
    }
    function updateCheck($i,$id){
        return DB::exec("UPDATE permission SET control='1' WHERE page_id=? AND role_id=?",[$i,$id]);
    }
    function addFirstPage($i,$id){
        return DB::insert("INSERT INTO permission (page_id,role_id,control) VALUES (?,?,?)",[$i,$id,'1']);
    }

}