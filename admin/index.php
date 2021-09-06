<?php 
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
      