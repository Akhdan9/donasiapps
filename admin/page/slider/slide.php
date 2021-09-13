<?php 
if(isset($_POST['simpan'])){
    $image_title = trim($_POST['image_title']);
    $image_file = $_FILES['image_file']['name'];
    $image_tmp = $_FILES['image_file']['tmp_name'];

    move_uploaded_file($image_tmp, "../assets/img/slide/$image_file");
    $query = mysqli_query($connection, "INSERT INTO slides(image_title, image_file) VALUES('$image_title', '$image_file')");
    if ($query) {
        echo "Sukses";
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                <div class="card-title">
                    Tambah Slider
                </div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Upload Gambar</label>
                            <input type="file" class="form-control" name="image_file" required>
                        </div>
                        <div class="form-group">
                            <label>Judul Gambar</label>
                            <input type="text" class="form-control" name="image_title" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" name="simpan" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="card-title">List Data</div>
                    <ul class="list-group">
                        <?php
                            $query = mysqli_query($connection, "SELECT * FROM slides");
                            while($row = mysqli_fetch_array($query)){
                        ?>
                        <li class="list-group-item">
                            <?php echo $row['image_title'] ?>
                            <br>
                            <a href="?page=editSlide&sid=<?php echo $row['id_slide'] ?>" class="btn btn-warning">Edit</a>
                            <a href="?page=slider&sid=<?php echo $row['id_slide'] ?>" class="btn btn-danger">Delete</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

if(isset($_GET['sid'])){
    $sid = $_GET['sid'];
    mysqli_query($connection, "DELETE FROM slides WHERE id_slide = '$sid'");
}

?>