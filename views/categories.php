<style>
body {
    background-color: #F0F0F0;
    font-family: 'Calibri', sans-serif !important
}

.mt-100 {
    margin-top: 100px;
}

.mb-100 {
    margin-bottom: 100px;
}

.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid transparent;
    border-radius: 0px;
}

.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}

.card .card-title {
    position: relative;
    font-weight: 600;
    margin-bottom: 10px;
}

ul.list-style-none li {
    list-style: none;
}

ul.list-style-none li a {
    color: #673AB7;
    padding: 8px 0px;
    display: block;
    text-decoration: none;
}

.m-t-5 {
    margin-top: 5px;
}

.w-30px {
    width: 30px;
}
</style>
<?php 
$category=DB::get("SELECT * FROM categories")
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h4 class="card-title mb-0">Kategoriler</h4>
                </div>
                <ul class="list-unstyled">

                    <?php foreach($category as $c){?>
                    <li class="d-flex no-block card-body">
                        <i class="fa fa-check-circle m-1"></i>
                        <div>
                            <a href="blogtext/<?php echo $c->id ?>" class="m-b-0 font-medium p-0" data-abc="true"><?php echo $c->name ?></a>
                        </div>
                    </li>
                    <?php } ?>
                    
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>