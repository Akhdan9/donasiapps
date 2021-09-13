<div class="container">
    <div class="row">
        <h1 class="text-center">Data Posts</h1>
    </div>

    <div class="row mt-5">
        <div class="col md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Post Title</th>
                        <th>Post Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = mysqli_query($connection, "SELECT * FROM posts");
                        while($row = mysqli_fetch_array($query)){

                    ?>
                    <tr>
                        <td><?php echo $row['post_title']?></td>
                        <td><?php echo $row['post_date']?></td>
                        <td>
                            <a href="?page=editPost&pid=<?php echo $row['id_post'] ?>" class="btn btn-warning">Edit</a>
                            <a href="?page=posts&delete=<?php echo $row['id_post'] ?>" class="btn btn-danger">Delete</a>
                            <a href="?page=detailPost&detail=<?php echo $row['id_post'] ?>" class="btn btn-info">Detail</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php

if(isset($_GET['delete'])){
    $pid = $_GET['delete'];
    $query = mysqli_query($connection, "DELETE FROM posts WHERE id_post = '$pid'");
}

?>