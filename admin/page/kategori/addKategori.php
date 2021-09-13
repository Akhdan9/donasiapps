<?php

if(isset($_POST['simpan'])){
    $kategori = $_POST['nama_kat'];
    $query = "INSERT INTO kategori(nama_kat) VALUES('$kategori')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "sukses";
    } else {
        echo "gagal";
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">Tambah Kategori</div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <a href="" class="btn btn-secondary">Kembali</a>
                    <form method="post">
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input type="text" class="form-control" name="nama_kat">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-block" name="simpan" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>