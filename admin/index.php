<?php

include '../includes/db.php';
include '../includes/config.php';
include 'includes/header.php';

?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'includes/navigation.php' ?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'includes/topbar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <?php 

          if(isset($_GET['page'])){
            $page = $_GET['page'];
          } else {
            $page = '';
          }
          switch($page){
            case 'slider': 
              include 'page/slider/slide.php';
              break;

            case 'posts': 
              include 'page/posts/posts.php';
              break;

            case 'addPost': 
              include 'page/posts/addPost.php';
              break;

            case 'editPost': 
              include 'page/posts/editPost.php';
              break;

            case 'detailPost': 
              include 'page/posts/detailPost.php';
              break;
              
            case 'kategori': 
              include 'page/kategori/kategori.php';
              break;

            case 'addKategori': 
              include 'page/kategori/addKategori.php';
              break;

            case 'editKategori': 
              include 'page/kategori/editKategori.php';
              break;

            case 'users': 
                include 'page/users/users.php';
                break;

            case 'addUsers': 
              include 'page/users/addUsers.php';
              break;
              
            case 'editUsers': 
              include 'page/users/editUsers.php';
              break;

            case 'detailUsers': 
            include 'page/users/detailUsers.php';
            break;
            
            case 'payment': 
              include 'page/payment/payment.php';
              break;

            case 'pending': 
              include 'page/payment/pending.php';
              break;
            
            case 'detailPayment': 
              include 'page/payment/detailPayment.php';
              break;
            


            default : 
            include 'page/dashboard.php';
            break;
          }
          ?>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include 'includes/footer.php';
      