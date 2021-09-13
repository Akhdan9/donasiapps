<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">List Kategori</h1>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                        $query = mysqli_query($connection, "SELECT * FROM kategori");
                                        while($row = mysqli_fetch_array($query)){
                                    ?>
                                <tr>
                                    <td><?php echo $row['nama_kat'] ?></td>
                                    <td>
                                        <a href="?page=editKategori&kid=<?php echo $row['id_kategori'] ?>" class="btn btn-warning">Edit</a>
                                        <a href="?page=kategori&delete=<?php echo $row['id_kategori'] ?>" class="btn btn-danger">Delete</a>
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
    $kid = $_GET['delete'];
    $query = mysqli_query($connection, "DELETE FROM kategori WHERE id_kategori = '$kid'");
}

?>