<?php

if(isset($_POST['daftar'])){
    $fullname = mysqli_real_escape_string($connection, $_POST['fullname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $error = [
        'fullname' => '',
        'email' => '',
        'phone' => '',
        'password' => '',

    ];

    if($fullname == ''){
        $error['fullname'] = 'Nama tidak boleh kosong.';
    }

    if($email == ''){
        $error['email'] = 'Email tidak boleh kosong.';
    }

    if($phone == ''){
        $error['phone'] = 'Telepon tidak boleh kosong.';
    }

    if($password == ''){
        $error['password'] = 'Password tidak boleh kosong.';
    }

    if($fullname && $email && $phone && $password){

        $query = mysqli_query($connection, "INSERT INTO users (id_role,fullname,email,phone,password,status)
                                        VALUES('2','$fullname','$email','$phone','$password','2')");
    if($query){
        echo "SUKSES";
    } else {
        echo "GAGAL";
    }
    }

    
}

?>


<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-6">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="card-title"><h3 class="text-center">Daftar</h3></div>
                    <?php echo isset($notif) ? $notif : '' ?>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input name="fullname" type="text" class="form-control" >
                            <p><?php echo isset($error['fullname']) ? $error['fullname'] : '' ?></p>
                            </div>
                            <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="email" class="form-control" >
                            <p><?php echo isset($error['email']) ? $error['email'] : '' ?></p>
                            </div>
                            <div class="form-group">
                            <label>No. Telp</label>
                            <input name="phone" type="number" class="form-control" >
                            <p><?php echo isset($error['phone']) ? $error['phone'] : '' ?></p>
                            </div>
                            <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control" >
                            <p><?php echo isset($error['password']) ? $error['password'] : '' ?></p>
                            </div>
                            <div class="form-group">
                            <button name="daftar" type="submit" class="btn btn-primary btn-block">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="card-title"><h3 class="text-center">Daftar</h3></div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

