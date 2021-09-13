<?php

if(isset($_GET['detail'])){
    $pid = $_GET['detail'];

    $query = mysqli_query($connection, "SELECT * FROM posts
                            INNER JOIN kategori ON kategori.id_kategori = posts.id_kategori
                            INNER JOIN users ON users.id_user = posts.id_user
                            WHERE id_post='$pid'");

    $data = mysqli_fetch_array($query);


}

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Detail Post</h1>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                <a href="" class="btn btn-secondary">Kembali</a>
                <table class="table table-bordered">
                    <tr>
                        <td class="col-md-3">Nama</td>
                        <td class="col-md-7"><?php echo $data['fullname'] ?></td>
                    </tr>
                    <tr>
                        <td class="col-md-3">Kategori</td>
                        <td class="col-md-7"><?php echo $data['nama_kat'] ?></td>
                    </tr>
                    <tr>
                        <td class="col-md-3">Judul</td>
                        <td class="col-md-7"><?php echo $data['post_title'] ?></td>
                    </tr>
                    <tr>
                        <td class="col-md-3">Deskripsi</td>
                        <td class="col-md-7"><?php echo $data['post_desc'] ?></td>
                    </tr>
                    <tr>
                        <td class="col-md-3">Jumlah Donasi</td>
                        <td class="col-md-7"><?php echo $data['post_amount'] ?></td>
                    </tr>
                    <tr>
                        <td class="col-md-3">Tanggal Posting</td>
                        <td class="col-md-7"><?php echo $data['post_date'] ?></td>
                    </tr>
                    <tr>
                        <td class="col-md-3">Poster</td>
                        <td><img src="../assets/img/post/<?php echo $data['post_image'] ?>" alt="<?php echo $data['post_title'] ?>" class="img-fluid"></td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-title"><h1 class="text-center">History</h1></div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nama Donatur</th>
                            <th>Jumlah</th>
                        </tr>
                        <tbody>
                            <?php 
                                $history = mysqli_query($connection, "SELECT * FROM payments
                                                       INNER JOIN posts ON posts.id_post = payments.id_post
                                                       INNER JOIN users ON users.id_user = payments.id_user
                                                       WHERE payments.id_post = '$pid' ");

                                while($row = mysqli_fetch_array($history)){
                            ?>
                            <tr>
                                <td><?php echo $row['fullname'] ?></td>
                                <td><?php echo $row['amount'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>