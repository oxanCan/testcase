 <?php
$id = $_GET['id'];
$data = DB::getRow('SELECT * FROM blog WHERE blog_id=?',[$id]); 
?>
 <div class="container">
     <div class="row">
         <div class="card">
             <div class="card-header">
                 <h4 class="m-0 font-weight-bold text-primary row justify-content-center">Blog Düzenle</h4>
                 <div class="w-50 p-3 ">
                     <label for="exampleInputEmail1" class="form-label" name="title">Başlık Giriniz :</label>
                     <input type="text" class="form-control" id="title" name="title" value="<?php echo $data->title ?>">
                 </div>
                 <div class="mb-1 w-50 p-3">
                     <label for="" class="form-label">Kısa Açıklama :</label>
                     <input type="text" class="form-control" id="short_tag" name="short_tag"
                         value="<?php echo $data->short_tag ?>">
                 </div>
                 <br>
             </div>
             <div class="card-body">
                 <textarea name="editor" id="editor" cols="30" rows="10"><?php echo $data->blog_text ?></textarea>
             </div>
             <div class="card-footer d-flex justify-content-end">
                 <button type="button" class="btn btn-success m-1"
                     onclick="editBlog(<?php echo $id; ?>)">Kaydet</button>
                 <a type="button" class="btn btn-danger m-1" href="bloglist">İptal Et</a>
             </div>
         </div>
     </div>
 </div>

 <script type="text/javascript" src="assets/js/modules/editBlog.js"></script>