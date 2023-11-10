<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="">Anasayfa</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="categories">Kategoriler</a></li> 
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about">Hakkımda</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact">İletişim</a></li>
                <?php 
                if($_SESSION){
                
                ?>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" onclick="logout()" >Çıkış Yap</a></li>
                <?php }else{ }
                    ?>
            </ul>
        </div>
    </div>
</nav>
<script type="text/javascript" src="assets/js/modules/auth.js"></script>
