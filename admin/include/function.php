<?php 
function C($text)
{
    return trim(strip_tags(htmlspecialchars(addslashes($text))));
}

function permission($page_url){
    $role_id=$_SESSION["role_id"];
    $page_id=DB::getVar("SELECT page_id FROM pages WHERE href=?",[$page_url]);
    $check=DB::getVar("SELECT control FROM  permission WHERE page_id=? AND role_id=?",[$page_id,$role_id]);
    return $check ? true : false;
}