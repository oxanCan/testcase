<?php
include("../include/config.php");
$blog=new Blogadmin();
if(isset($_POST["blogTable"])){
    $data = $blog->getBlog();
    $response=[];
    if (count($data) > 0) {
        foreach ($data as $d) {
            $categoryName=DB::getVar("SELECT name FROM categories WHERE id=?",[$d->category_id]);
    $response[]=[
        "blog_id" => $d->blog_id,
        "category" => $categoryName,
        "title" =>$d->title,
        "short_tag"=>$d->short_tag,
        "process"=>' <a type="button" class="btn btn-info btn-circle m-1" href="editblog/'.$d->blog_id.'"
        name="edit_btn"><i class="bi bi-pencil"></i></a>
        <button type="button" class="btn btn-danger btn-circle m-1 " onclick="deleteBlog('.$d->blog_id.')">
            <i class="fas fa-trash"></i>'
        ];
        }
    }
    echo json_encode(["recordsTotal" => count($data), "recordsFiltered" => count($data), "data" => $response]);
    exit();
}
