<div class="container-fluid">
   <div class="row jumbotron">       
        <div class="col-md-6">
            <div class="text-center" id="item-box">
                <h1>“ SUDAHKAH ANDA <b>BERDONASI</b> HARI INI ” </h1>
                <a href="index.php?page=akun" class="btn btn-outline-success">Daftar Gratis</a>
                <a href="#" class="btn btn-primary">Mulai Donasi</a>    
            </div>
        </div>
        <div class="col-md-6">
        <div id="carouselExampleIndicators" class="carousel slide mt-3 d-none d-md-block" data-ride="carousel">
		    <ol class="carousel-indicators">
			    <?php 
			    	$no = 0;
					for($no;$no<3;$no++){
				?>
				    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $no ?>" class="<?php if($no == 0){echo 'active';}else{echo 'notactive';}?>"></li>
				<?php 
					}
				?>
			</ol>
			  <div class="carousel-inner">
			 	 
			    <div class="carousel-item active">
			      <img class="d-block w-100 img-fluid" src="assets/img/1.jpg" style="height: 350px;">
                  <div class="carousel-caption d-none d-md-block">
                      <h6>Slide 1</h6>
                  </div>
                </div>
                <div class="carousel-item">
			      <img class="d-block w-100 img-fluid" src="assets/img/2.jpg" style="height: 350px;">
                  <div class="carousel-caption d-none d-md-block">
                      <h6>Slide 2</h6>
                  </div>
                </div>
                <div class="carousel-item">
			      <img class="d-block w-100 img-fluid" src="assets/img/3.jpg" style="height: 350px;">
                  <div class="carousel-caption d-none d-md-block">
                      <h6>Slide 3</h6>
                  </div>
                </div>
			    
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
        </div>
       		
        </div>
   </div> 
</div>

<div class="container">
    <div class="row push-from-top">
        <div class="col-md-4">
            <a href="#" class="btn btn-lg text-white bg-custom-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            </svg> 
            List Donasi</a>
        </div>
    </div>
    <div class="row push-from-top">
        
    <?php

    $query = mysqli_query($connection, "SELECT * FROM posts");
    if(mysqli_num_rows($query) > 0) {
    while($data = mysqli_fetch_array($query)){

    ?>
        <div class="col-md-4">
            <div class="card border-0 shadow-lg mb-3">
                <img src="assets/img/1.jpg" class="img-fluid" style="width:100%;height: 200px;" alt="slide-image">
                <div class="card-body">
                    <div id="box-card-title">
                        <a class="nav-link" href="<?php echo BASE_URL?>?page=detail&id_post=<?php echo $data['id_post']?>">
                            <h3 class="custom-card-title"><?php echo $data['post_title']?></h3>
                        </a>
                    </div>
                </div>
                <div class="card-footer bg-custom-primary text-white">
                <p>
                        Dana Terkumpul <br>
                        Rp <?php echo $data['post_amount'] ?>
                        <br>
                        <i>Tanggal Posting : <?php echo $data['post_date'] ?></i>      
                    </p>
                </div>
            </div>
        </div>
        <?php } }else{
            echo '<div class="col-md-12 alert alert-danger" role="alert"> Tidak ada data</div>';
        } ?>
        
   </div>
   
</div>

<div class="container">
    <div class="row push-from-top">
        <div class="col-md-12 text-center">
            <h1 class="text-center">Kategori Donasi</h1>
        </div>
   </div>

   <div class="row push-from-top text-center">
       <?php 

        $query = mysqli_query($connection, "SELECT * FROM kategori");
        while($data = mysqli_fetch_array($query)){
       ?>
       <div class="col-md-4">
           <a href="<?php echo BASE_URL ?>?page=kategori&id_kategori=<?php echo $data['id_kategori']?>" class="btn btn-outline-primary btn-block mb-3"><?php echo $data['nama_kat']?></a> 
       </div>
       <?php } ?>
       
   </div>
</div>