<?php

if(isset($_POST['simpan'])){
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT, array('cost' => 10));

    $query = mysqli_query($connection, "INSERT INTO users (id_role, fullname,phone,email,password, status) 
                            VALUES ('1', '$fullname', '$phone', '$email', '$password_hash','1')");
    if($query){
        echo "Sukses";
    } else {
        echo "gagal";
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Tambah User</h1>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <a href="" class="btn btn-secondary">Kembali</a>
                    <form method="post">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="fullname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="simpan">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>