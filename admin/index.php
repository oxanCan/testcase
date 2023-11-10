<?php
include "include/config.php";
if($_SESSION["user"]){ ?>
<html lang="tr">
<head>
    <?php include "views/partials/head.php";?>
</head>
<body id="page-top">
    <div id="wrapper">
        <?php include 'views/partials/sidebar.php'; ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include "views/partials/navbar.php"; ?>
                <div class="container-fluid">
                    <?php include "get.php"; ?>
                </div>
            </div>
            <?php include "views/partials/footer.php"; ?>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo site_url; ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo site_url; ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo site_url; ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo site_url; ?>/assets/js/sb-admin-2.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url; ?>/assets/js/sweetalert.min.js"></script>
    <link href="<?php echo site_url; ?>/assets/css/sweetalert.css" rel="stylesheet">
</body>
</html>
<?php
}else{
    include "views/login.php";
}