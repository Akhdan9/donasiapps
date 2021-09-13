<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">
                List Users
            </h1>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = mysqli_query($connection, "SELECT * FROM users");
                                    while($row = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td><?php echo $row['fullname'] ?></td>
                                    <td><?php echo $row['phone'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td>
                                        <a href="?page=editUsers&edit=<?php echo $row['id_user'] ?>" class="btn btn-warning">Edit</a>
                                        <a href="?page=users&delete=<?Php echo $row['id_user'] ?>" class="btn btn-danger">Delete</a>
                                        <a href="?page=detailUsers&detail=<?php echo $row['id_user'] ?>" class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 

if(isset($_GET['delete'])){
    $uid = $_GET['delete'];
    $query = mysqli_query($connection, "DELETE FROM users WHERE id_user='$uid'");
}

?>