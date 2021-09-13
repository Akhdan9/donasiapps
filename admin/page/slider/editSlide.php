<?php

if(isset($_GET['sid'])){
    $sid = $_GET['sid'];
    $query = mysqli_query($connection, "SELECT * FROM slides WHERE id_slide='$sid'");
    $data = mysqli_fetch_array($query);

    if(isset($_POST['update'])){
        $image_title = $_POST['image_title'];
        $image_file = $_FILES['image_file']['name'];
        $image_file_tmp = $_FILES['image_file']['tmp_name'];

        move_uploaded_file($image_file_tmp, "../assets/img/slide/$image_file");

        if(empty($image_file)){
            $query_image = mysqli_query($connection, "SELECT * FROM slides WHERE id_slide = '$sid'");
            $data_image = mysqli_fetch_array($query_image);
            $image_file = $data_image['image_file'];
        }

        mysqli_query($connection, "UPDATE slides SET image_title='$image_title', image_file='$image_file' WHERE id_slide = '$sid'");

    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Edit Slide</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Upload Gambar</label>
                            <input type="file" class="form-control" name="image_file">
                        </div>
                        <div class="form-group">
                            <label>Judul Gambar</label>
                            <input type="text" class="form-control" name="image_title" value="<?php echo $data['image_title'] ?>">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-warning btn-block" name="update" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="text-center">Preview</h4>
                        <img src="../assets/img/slide/<?php echo $data['image_file'] ?>" alt="" class="img-fluid">
                        <h5><?php echo $data['image_title'] ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div