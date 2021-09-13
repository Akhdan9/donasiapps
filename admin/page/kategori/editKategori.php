<?php

if(isset($_GET['kid'])){
    $kid = $_GET['kid'];
    $query = mysqli_query($connection, "SELECT * FROM kategori WHERE id_kategori = '$kid'");
    $data = mysqli_fetch_array($query);

    if(isset($_POST['update'])){
        $nama_kat = $_POST['nama_kat'];
        $query = mysqli_query($connection, "UPDATE kategori SET nama_kat = '$nama_kat' WHERE id_kategori = '$kid'");
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Edit Kategori</h1>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <a href="" class="btn btn-secondary">Kembali</a>
                    <form method="post">
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input type="text" class="form-control" name="nama_kat" value="<?php echo $data['nama_kat'] ?>">
                        </div>

                        <div class="form-group">
                            <button type="submit" name="update" class="btn btn-warning btn-block">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>