<?php 

if(isset($_GET['id_kategori'])){
    $id_kategori = $_GET['id_kategori'];

    $query = mysqli_query($connection, "SELECT * FROM kategori WHERE id_kategori='$id_kategori'");
    $row = mysqli_fetch_array($query);   
    $nama_kat = $row['nama_kat'];

    
}

?>

<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <h1>Kategori Donasi : <?php echo $row['nama_kat']?></h1>
        </div>
    </div>
    <div class="row mt-3">
        <?php
        
        $dataKategori = mysqli_query($connection, "SELECT * FROM posts WHERE posts.id_kategori='$id_kategori'");
        if(mysqli_num_rows($dataKategori) > 0){
        while($data = mysqli_fetch_array($dataKategori)){
        $judul = $data['post_title'];
        $donasi = $data['post_amount'];
        $tanggal = $data['post_date'];
        $id_post = $data['id_post'];
    
  

        ?>
            <div class="col-md-4">
            <div class="card border-0 shadow-lg mb-3">
                <img src="assets/img/1.jpg" class="img-fluid" style="width:100%;height: 200px;" alt="slide-image">
                <div class="card-body">
                    <div id="box-card-title">
                        <a class="nav-link" href="<?php echo BASE_URL?>?page=detail&id_post=<?php echo $id_post?>">
                            <h3 class="custom-card-title"><?php echo $judul ?></h3>
                        </a>
                    </div>
                </div>
                <div class="card-footer bg-custom-primary text-white">
                <p>
                        Dana Terkumpul <br>
                        Rp <?php echo $donasi ?>
                        <br>
                        <i>Tanggal Posting : <?php echo $tanggal ?></i>      
                    </p>
                </div>
            </div>
            </div>
            <?php } } else {
                echo '<div class="col-md-12 alert alert-danger" role="alert"> Tidak ada data</div>';
            } ?>
    </div>
</div>