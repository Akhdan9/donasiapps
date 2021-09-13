<?php

if(isset($_GET['pid'])){
    $post_id = $_GET['pid'];

    $query = mysqli_query($connection, "SELECT * FROM posts WHERE id_post = '$post_id'");
    $data = mysqli_fetch_array($query);

    if(isset($_POST['update'])){
        $id_kategori = $_POST['id_kategori'];
        $post_title = $_POST['post_title'];
        $post_desc = $_POST['post_desc'];
        $post_image = $_FILES['post_image']['name'];
        $post_image_tmp = $_FILES['post_image']['tmp_name'];

        move_uploaded_file($post_image_tmp, "../assets/img/post/$post_image");

        if(empty($post_image)){
            $image_query = mysqli_query($connection, "SELECT * FROM posts WHERE id_post = '$post_id'");
            $data_image = mysqli_fetch_array($image_query);
            $post_image = $data_image['post_image'];
        }

        $update = mysqli_query($connection, "UPDATE posts SET id_kategori='$id_kategori', post_title = '$post_title', post_image= '$post_image',
                                            post_desc= '$post_desc' WHERE id_post='$post_id'");
    }

}

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Edit Post</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <a href="#" class="btn btn-secondary mb-3">Back</a>
                    <form method="post" enctype="multipart/form-data"> 
                        <div class="form-group">
                            <label for="">Pilih Kategori</label>
                            <select name="id_kategori" id="" class="form-control">
                                <?php 
                                    $query_kategori = mysqli_query($connection, "SELECT * FROM kategori");
                                    while($kategori = mysqli_fetch_array($query_kategori)){
                                ?>
                                    <option value="<?php echo $kategori['id_kategori'] ?>"><?php echo $kategori['nama_kat'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Judul Post</label>
                            <input type="text" class="form-control" name="post_title" value="<?php echo $data['post_title']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Upload Gambar</label>
                            <input type="file" class="form-control" name="post_image" value="<?php echo $data['post_image']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="post_desc" id="" cols="30" rows="10" class="form-control"><?php echo $data['post_desc']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Judul Post</label>
                            <button type="submit" class="btn btn-primary btn-block" name="update">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>