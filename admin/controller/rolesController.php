<?php
include("../include/config.php");
$role=new Role();
if(isset($_POST["rolePage"])){
    $data =$role->getRoles();
    $response=[];
        if (count($data) > 0) {
            foreach ($data as $d) {
        $response[]=[
        "role_id" => $d->id,
        "role_name" => $d->name,
        "process" => '<button type="button" class="btn btn-warning" onclick="getPageModal('.$d->id.')"  data-bs-toggle="modal" data-bs-target="#ajax">Düzenle</button>',
            ];
        }
    }
    echo json_encode(["recordsTotal" => count($data), "recordsFiltered" => count($data), "data" => $response]);
    exit();    
}
if(isset($_POST["getPageModal"])){
    $id = $_POST["id"];
    $data = $role->getPages();

    $response = '
    <table class="table" id="pageTable">
 
            <tr>
                <th>Sayfa Adı</th>
                <th>İşlem</th>
            </tr>
 
        <tbody>';

        foreach ($data as $d) {
            $page_id=$d->page_id;
            $roles = $role->checkPermission($page_id,$id);
            
            $checked = ''; 
            
            
            foreach ($roles as $r) {
                
                if ($r->control == '1') {
                    $checked = 'checked';
                    break; 
                }
            }
            
            $response .= '
            <tr>
                <td>' . $d->page_name . '</td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input role" type="checkbox" id="flexSwitchCheckDefault" value="' . $d->page_id . '" ' . $checked . '>
                    </div>
                </td>
            </tr>';
        }
        

    $response .= '
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-success" onclick="addPermission(' . $id . ')">Kaydet</button>
    </div>';

    echo $response;
    exit();
}
if(isset($_POST["addPermission"])){
    $id = C($_POST["id"]);
    $IDs = $_POST["IDs"];
    $IDsNot=$_POST["IDsNot"];
    
    foreach($IDsNot as $in){
    $update=$role->updateNotCheck($in,$IDs);
    }
    foreach($IDs as $i){
        $control=$role->controlCheck($i,$id);
        if($control){
            $update=$role->updateCheck($i,$id);
        }else{
            $add = $role->addFirstPage($i,$id);

        }
    }
    echo "ok";
    exit();
}