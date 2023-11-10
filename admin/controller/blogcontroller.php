<?php

include "../include/config.php";
$blog=new Blogadmin();
$about=new About();
if(isset($_POST["addBlog"])){
    $text = $_POST['text'];
    $title = $_POST['title'];
    $short_tag = $_POST['shortTag'];
    $category = $_POST['category'];
    $categoryText = implode(",", $category);

    if(!$text || !$title || !$short_tag || !$category){
        echo "bos";
    } else {
            $addBlog =$blog->addBlog($text, $title, $short_tag, $categoryText);
        echo 'ok';
    }
}

if(isset($_POST["deleteBlog"])){
    $blog_id = $_POST["blog_id"];
    $deleteBlog=$blog->deleteBlog($blog_id);
    echo'ok';

}
if(isset($_POST["editBlog"])){
    $blog_id=$_POST["blog_id"];
    $text = $_POST['text'];
    $title= $_POST['title'];
    $short_tag= $_POST['short_tag'];

    if(!$text || !$title || !$short_tag){
        echo "bos";
    }else{
    $editBlog = $blog->editBlog($title, $short_tag, $text, $blog_id);
    echo 'ok';
    }
}
if(isset($_POST["editContact"])){
    $contact = $_POST['contact'];
        $editContact = $blog->editContact($contact);
        echo 'ok';
}
if(isset($_POST["editAbout"])){
    $about = $_POST['about'];
        $editContact = $about->editAbout($about);
        echo 'ok';
}

?>