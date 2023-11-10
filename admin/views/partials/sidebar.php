<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="" ;>
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Yönetici Paneli

        </div>
    </a>



    <!-- Heading -->
    <div class="sidebar-heading">
        Blog Yönetimi
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <?php
    $data=DB::get("SELECT * FROM pages WHERE parent_id='0'");
    $role_id=$_SESSION["role_id"];
    foreach($data as $d){
        $getPages=DB::get("SELECT * FROM pages WHERE parent_id = ?",[$d->page_id]);
    ?>
    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span><?php echo $d->page_name ?></span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <?php 
            $pages=DB::get("SELECT page_id FROM permission WHERE role_id=? AND control='1' ",[$role_id]);
            $values = array_map(function($item) {
                return $item->page_id;
            }, $pages);
       foreach($getPages as $gP){
            if(in_array($gP->page_id, $values)){
        ?>
                <a class="collapse-item" href="<?php echo $gP->href?>"
                    value="<?php echo $gP->page_id?>"><?php echo $gP->page_name;?></a>
                <?php 
            }
        }
    }
    ?>
                <a class="collapse-item" data-bs-toggle="modal" data-bs-target="#ajax" onclick="addCategoryModal()">Yeni
                    Kategori</a>
                <a class="collapse-item" id="delete" data-bs-toggle="modal" data-bs-target="#ajax"
                    onclick="deleteCategoryModal()">Kategori Kaldır</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->