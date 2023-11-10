
<div class="container px-4 px-lg-5">
    <div class="row gx-2 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <div class="post-preview">
                        <h4 class="text-center">Blog Sayfamıza Hoş geldiniz.</h4>
                        <?php 
                        
                        if($_SESSION){
                            $id=$_SESSION["user"];
                            $name=DB::getVar("SELECT name FROM blog_users WHERE id=?",[$id]);
                            ?>
                            <h2 class="text-center"><?php echo $name;?></h2>
                        <?php }else{
                        ?>
                            <h6 class="text-center m-5 "><a href="login" class="text-primary">Giriş Yap</a>     /     <a href="register"  class="text-primary">Kayıt Ol</a></h6>
                        <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
