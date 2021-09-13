<?php

if(isset($_GET['edit'])){
    $uid = $_GET['edit'];

    $query = mysqli_query($connection, "SELECT * FROM users WHERE id_user = '$uid'");
    $data = mysqli_fetch_array($query);

    if(isset($_POST['update'])){
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $db_user_password = $data['password'];

        if (empty($password)){
            $hashpass = $db_user_password;
        } else {
            $hashpass = password_hash($password, PASSWORD_BCRYPT, array('cost' => 10));
        }

        $update = mysqli_query($connection, "UPDATE users SET fullname = '$fullname',
                                                                phone = '$phone',
                                                                email = '$email',
                                                                password = '$hashpass' WHERE id_user = '$uid'");

if($update){
    echo "Sukses";
} else {
    echo "gagal";
}
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Edit User</h1>
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
                            <input type="text" name="fullname" class="form-control" value="<?php echo $data['fullname'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $data['phone'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $data['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning btn-block" name="update">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>