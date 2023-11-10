<?php
include("../include/config.php");
$categoryClass=new Category();
if(isset($_POST["addCategoryModal"])){
    $response='
    <div class="form-floating mb-3">
    <input type="text" class="form-control shadow" id="categoryName" placeholder="Kategori">
    <label for="floatingInput">Kategori Adı</label>
  </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="addCategory()">Ekle</button>
    </div>
    ';
    echo $response;
    exit();
}
if(isset($_POST["deleteCategoryModal"])){
    $data=DB::get("SELECT * FROM categories");
    $response= '
    <label for="">Kategori Kaldır</label>
    <select class="form-select shadow" id="categorySelect" name="categorySelect">
        <option selected value="">Kategoriler</option>
        ';
        foreach($data as $d){
        $response.='<option value="'.$d->id.'">'.$d->name.'</option>';
        }
        $response.= '
    </select>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="deleteCategory()">Sil</button>
    </div>
    ';
    echo $response;
    exit();
}
if(isset($_POST["deleteCategory"])){
    $id=C($_POST["id"]);
    $control=DB::getRow("SELECT category_id FROM blog WHERE category_id=?",[$id]);
    if(!$id){
        echo "bos";
    }else if($control){
        echo "hata";
    }else{
        $delete=$categoryClass->deleteCategory($id);
        echo "ok";
    }
}
if(isset($_POST["addCategory"])){
    $category=$_POST["categoryName"];
    $control=$categoryClass->addControl($category);
    if(!$category){
        echo "bos";
    }else if($control){
        echo "hata";
    }else{
        $add=$categoryClass->addCategory($category);
        echo "ok";
    }
}
if(isset($_POST['categoryTable'])){
    $data = $categoryClass->getCategories();
    $response=[];
    if (count($data) > 0) {
        foreach ($data as $d) {
        $response[]=[
            "id" => $d->id,
            "name" =>$d->name,
            "process"=>'<input class="form-check-input category" type="checkbox" value="'.$d->id.'" id="check">',
        ];
            }
        }
    echo json_encode(["recordsTotal" => count($data), "recordsFiltered" => count($data), "data" => $response]);
    exit();
}
