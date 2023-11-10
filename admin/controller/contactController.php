<?php 
include("../include/config.php");
$contact=new Contactadmin();
if(isset($_POST["contactTable"])){
    $data =$contact->getContact();
    $response=[];
    if (count($data) > 0) {
        foreach ($data as $d) {
            $process=$d->status == 0 ? '<button class="btn btn-warning btn-circle m-1" onclick="checkContact('.$d->contact_id.')">
            <i class="fas fa-exclamation-triangle"></i>':'<button type="button" class="btn btn-sm btn-success">Okundu</button>';
    $response[]=[
        "contact_id" => $d->contact_id,
        "name" => $d->contact_name,
        "email" =>$d->contact_mail,
        "phone"=>$d->contact_phone,
        "message"=>$d->contact_message,
        "process"=>$process,
        ];
        }
    }
    echo json_encode(["recordsTotal" => count($data), "recordsFiltered" => count($data), "data" => $response]);
    exit();
}
if(isset($_POST["checkContact"])){
    $contact_id = $_POST['contact_id'];
    $checkContact = $contact->checkContact($contact_id);
    echo'ok';
}
