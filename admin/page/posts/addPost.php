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
                    <form method="post">
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
                            <input type="text" class="form-control" name="post_image" required>
                        </div>
                        <div class="form-group">
                            <label>Post Desc</label>
                            <textarea name="post_desc" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>