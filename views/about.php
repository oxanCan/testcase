<?php 
$data= DB::getRow("SELECT * FROM about");
?>
<h2 class=" m-5 font-weight-bold text-dark row justify-content-center"> HAKKIMDA </h2>
<div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-7 m-5">
        <p></p><?php echo $data-> about_details ?></p>
    </div>
</div>
