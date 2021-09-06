<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <h1 class="text-center">List Donasi</h1>
        </div>
    </div>


<div class="row mt-3 mb-5">
    <?php
        $query = mysqli_query($connection, "SELECT * FROM posts");
        while($data = mysqli_fetch_array($query)){

    ?>
    <div class="col-md-4">
        <div class="card border-0 shadow-lg">
            <img src="assets/img/2.jpg" alt="">
            <div class="card-body">
                <div class="card-title">
                    <a href="#" class="nav-link"><?php echo $data['post_title']?></a>
                </div>
                <p class="card-text">
                <?php echo substr($data['post_desc'],0,100)?>
                </p>
            </div>
            <div class="card-footer bg-custom-primary text-white">
                <p class="card-text">
                    Dana Terkumpul <br>
                    Rp <?php echo $data['post_amount']?>
                    <br>
                    <i>Tanggal Posting : <?php echo $data['post_date']; ?></i>
                </p>
            </div>
        </div>
        </div>
        <?php } ?>
    </div>
</div>