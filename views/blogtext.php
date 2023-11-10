<?php 
$id=$_GET["id"];
$categoryName=DB::getVar("SELECT name FROM categories WHERE id=?",[$id]);
?>
<div class="container">
    <div class="row">
        <div class="card shadow">
            <div class="card-header m-5 shadow">
                <div class="card-body">
                    <p class="text-muted text-center"></p>
                    <h2><?php echo $categoryName?></h2>
                    <p>Blog Yazıları:</p>
                    <table class="table table-striped" id="blogTable">
                        <thead>
                            <?php 
                            $data=DB::get("SELECT * FROM blog WHERE category_id=?",[$id]);
                            ?>
                            <tr>
                                <th class="d-none">Başlık</th>
                                <th>Başlık</th>
                                <th>Açıklama</th>
                                <th>Tarih</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br>
<script type="text/javascript" src="assets/js/modules/blogtext.js"></script>
<script>
    blogTable(<?php echo $id;?>)
</script>