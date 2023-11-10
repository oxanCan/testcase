<?php
$data = DB::getRow("SELECT * From blog Where blog_id = ?", [$_GET["id"]]);
?>
<article class="mb-5">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
               <h2 class="m-2 font-weight-bold text-dark row justify-content-center"><?php echo $data->title;?></h2>
               <p><?php echo $data->short_tag;?></p>
               <p><?php echo $data->blog_text;?></p>
            </div>
        </div>
    </div>
</article>