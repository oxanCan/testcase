<?php 
include("../include/config.php");

$blog=new Blog();

if(isset($_POST["blogTable"])){
    $id=$_POST["id"];
    $data=$blog->getBlog($id);
    
    $response=[];
    if (count($data) > 0) {
    
        foreach ($data as $d) {
            $date = new DateTime($d->date);
            $formattedDate = $date->format('d/m/Y');
        $response[]=[
            "blog_id" => $d->blog_id,
            "title" =>$d->title,
            "short_tag"=>$d->short_tag,
            "date"=> $formattedDate,
            "process"=>'<a class="post-title" style="color:green;" href="blog/'.$d->blog_id.'"> Tüm yazıyı gör... </a>',
            ];
            }
        }
        echo json_encode(["recordsTotal" => count($data), "recordsFiltered" => count($data), "data" => $response]);
        exit();
}