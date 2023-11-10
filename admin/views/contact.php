<?php 
$sorgu= DB::get("SELECT * FROM contact ");
?>
<table class="table table-bordered" id="contactTable">
    <thead>
        <tr>
            <th scope="col" class="d-none"></th>
            <th scope="col">Ad ve Soyad</th>
            <th scope="col">Email</th>
            <th scope="col">Telefon</th>
            <th scope="col">Mesaj</th>
            <th scope="col">Durum</th>
        </tr>
    </thead>
    <tbody>
       
    </tbody>
</table>
<script type="text/javascript" src="assets/js/modules/contact.js"></script>

