<?php include "include/config.php"; 
   if(isset($_SESSION['user']))   {  
 ?>

<!DOCTYPE html>
<html lang="tr">
    <head>
        <?php include "views/partials/head.php";?>
    </head>
    <body>
        <?php include "views/partials/navbar.php"; ?>
        <?php include "views/partials/header.php"; ?>
        <?php include "get.php"; ?>  
        <?php include "views/partials/footer.php"; ?>
    </body>
</html>

<?php } else if (@$_GET["target"] == "login") {
    include "views/login.php";
} 
else if (@$_GET["target"] == "register") {
    include "views/register.php";
}else{
    include "views/login.php";

}
?>