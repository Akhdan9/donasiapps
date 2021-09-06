<?php

include 'includes/db.php';
include 'includes/config.php';
include 'includes/header.php';
include 'includes/navigation.php';
?>


<!--CONTENT HERE-->
<?php 

if(isset($_GET['page'])){
    $page = $_GET['page'];
} else {
    $page = '';
}
switch($page){
    case 'home' :
        include 'page/main.php';
    break;

    case 'donasi':
    include 'page/donasi.php';
    break;

    case 'kontak':
        include 'page/kontak.php';
        break;

    case 'akun':
    include 'page/akun.php';
    break;

    case 'kategori':
        include 'page/kategori.php';
        break;
    
    case 'detail':
            include 'page/detail.php';
            break;
    

    default : 
    include 'page/main.php';
    break;
}


?>
<!--END CONTENT-->

<?php include 'includes/footer.php' ?>



