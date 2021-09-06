<?php

if(isset($_GET['id_post'])){
    $id_post = $_GET['id_post'];

    $query = mysqli_query($connection, "SELECT * FROM posts
                        INNER JOIN kategori ON kategori.id_kategori = posts.id_kategori
                        INNER JOIN users ON users.id_user = posts.id_user
                        WHERE id_post= '$id_post'");
    $row = mysqli_fetch_array($query);

}

?>

<div class="container">
    <div class="row-mt-3">
        <h1>Detail Posting</h1>
    </div>

<div class="row mt-5">
    <div class="col-md-7">
            <div class="card border-0 shadow-lg mb-3">
                <img src="assets/img/1.jpg" class="img-fluid" style="width:100%;height: 200px;" alt="slide-image">
                <div class="card-body">
                    <div id="box-card-title">
                        <a class="nav-link" href="<?php echo BASE_URL?>?page=detail">
                            <h3 class="custom-card-title"><?php echo $row['post_title']?></h3>
                        </a>
                        <p>
                        <?php echo $row['post_desc']?>
                        </p>
                    </div>
                </div>
                <div class="card-footer bg-custom-primary text-white">
                <p>
                        Dana Terkumpul <br>
                        Rp <?php echo $row['post_amount']?>
                        <br>
                        <i>Tanggal Posting : <?php echo $row['post_date']?></i>      
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="card-title">
                        <h1>Jumlah Donasi</h1>
                    </div>

                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukkan Jumlah Donasi" >
                            <small class="form-text text-muted">Contoh : 1000</small>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Bayar</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card border-0 shadow-lg mt-5">
                <div class="card-body">
                    <div class="card-title">
                        <h1>Histori Donatur</h1>
                        <ul class="list-group">
                            <li class="list-group-item">
                                Nama : Adit 
                            </li>
                            <li class="list-group-item">
                                Jumlah Donasi : 10000
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>