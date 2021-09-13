<?php

if(isset($_POST['simpan'])){
    $id_user = 1;
    $id_kategori = $_POST['id_kategori'];
    $post_title = $_POST['post_title'];
    $post_desc = $_POST['post_desc'];

    $post_image = uniqid().$_FILES['post_image']['name'];
    $post_image_tmp = $_FILES['post_image']['tmp_name'];

    move_uploaded_file($post_image_tmp, "../assets/img/post/$post_image");

    $query = mysqli_query($connection, "INSERT INTO posts(id_user,id_kategori,post_title,post_desc,post_image)
                                        VALUES('$id_user','$id_kategori','$post_title','$post_desc','$post_image')");
    
    if($query){
        echo("Sukses");
    } else{
        echo("gagal");
    }
}


?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">
            Tambah Post
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        <select name="id_kategori" class="form-control" >
                            <option>Pilih Kategori</option>
                            <?php
                                $query = mysqli_query($connection, "SELECT * FROM kategori");
                                while($row = mysqli_fetch_array($query)){
                                    ?>

                                    <option value="<?php echo $row['id_kategori'] ?>"><?php echo $row['nama_kat'] ?></option>
                            <?php } ?>
                        </select>
                        </div>
                        <div class="form-group">
                            <label>Post Title</label>
                            <input type="text" class="form-control" name="post_title" required>
                        </div>
                        <div class="form-group">
                            <label>Post Image</label>
                            <input type="file" class="form-control" name="post_image" required>
                        </div>
                        <div class="form-group">
                            <label>Post Desc</label>
                            <textarea name="post_desc" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit" name="simpan">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>