<?php

if(isset($_POST['kontak'])){
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $subjek = mysqli_real_escape_string($connection, $_POST['subjek']);
    $message = mysqli_real_escape_string($connection, $_POST['message']);

    $error = [
        'email' => '',
        'subjek' => '',
        'message' => ''
    ];

    if($email == ''){
        $error['email'] = 'Email tidak boleh kosong.';
    }

    if($subjek == ''){
        $error['subjek'] = 'Subjek tidak boleh kosong.';
    }

    if($message == ''){
        $error['message'] = 'Message tidak boleh kosong.';
    }

    if($email && $subjek && $message){
        $query = mysqli_query($connection, "INSERT INTO kontak(email,subjek,message) VALUES('$email','$subjek','$message')");
        if($query){
            $notif = 'Pesan Terkirim';
        } 
    }
    
}

?>

<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-6">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="card-title"><h3 class="text-center">Form Kontak</h3></div>
                    <form method="post">
                        <?php echo isset($notif) ? $notif : '' ?>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="email" class="form-control" >
                            <p>
                                <?php echo isset($error['email']) ? $error['email'] : '' ?>
                            </p>
                        </div>
                        <div class="form-group">
                            <label>Subjek</label>
                            <input name="subjek" type="text" class="form-control" >
                            <p>
                                <?php echo isset($error['subjek']) ? $error['subjek'] : '' ?>
                            </p>
                        </div>
                        <div class="form-group">
                            <label>Pesan</label>
                            <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
                            <p>
                                <?php echo isset($error['message']) ? $error['message'] : '' ?>
                            </p>
                        </div>
                        <div class="form-group">
                            <button name="kontak" type="submit" class="btn btn-primary btn-block">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-lg">
            <div class="card-body">
                <div class="card-title"><h3 class="text-center">Peta Kami</h3></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d152542.6744334731!2d112.59307865950785!3d-7.99387505658819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62822063dc2fb%3A0x78879446481a4da2!2sMalang%2C%20Kota%20Malang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1630566688599!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            </div>
        </div>
    </div>
</div>