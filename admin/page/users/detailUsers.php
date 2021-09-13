<?php 

if(isset($_GET['detail'])){
    $uid = $_GET['detail'];

    $query = mysqli_query($connection, "SELECT * FROM users
                                        INNER JOIN roles ON roles.id_role = users.id_role WHERE id_user = '$uid'");
    $data = mysqli_fetch_array($query);

    $status = $data['status'];
    
    if($status == 1){
        $user = '<span class="badge badge-danger">Belum Aktif</span>';
    } else {
        $user = '<span class="badge badge-primary">Aktif</span>';
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Detail User</h1>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card border-0 shadow-kg">
                <div class="card-body">
                    <a href="" class="btn btn-secondary">Kembali</a>
                    <table class="table table-bordered">
                        <tr>
                            <td class="col-md-3">Nama Lengkap</td>
                            <td><?php echo $data['fullname'] ?></td>
                        </tr>
                        <tr>
                            <td class="col-md-3">No. Hp</td>
                            <td><?php echo $data['phone'] ?></td>
                        </tr>
                        <tr>
                            <td class="col-md-3">Email</td>
                            <td><?php echo $data['email'] ?></td>
                        </tr>
                        <tr>
                            <td class="col-md-3">Role</td>
                            <td><?php echo $data['role_name'] ?></td>
                        </tr>
                        <tr>
                            <td class="col-md-3">Tanggal Daftar</td>
                            <td><?php echo $data['user_registered'] ?></td>
                        </tr>
                        <tr>
                            <td class="col-md-3">Status</td>
                            <td><?php echo $user ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>