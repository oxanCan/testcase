<?php
$data=DB::getRow("SELECT * FROM about");
?>
<div class="container">
    <div class="row">
        <div class="card shadow">
            <div class="card-header">
                <h3 class="font-weight-bold text-dark m-3 d-flex justify-content-center"">Hakkımda</h3>
                <div class="d-flex justify-content-center">
                <textarea name="about" id="about" cols="50" rows="20 "><?php echo $data->about_details?></textarea>
                </div>
                <div class="m-5 d-flex justify-content-end">
                    <button type="button" class="btn btn-success btn-lg" onclick="editAbout()">Kaydet</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="assets/js/modules/editAbout.js"></script>