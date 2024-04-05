<!-- kode program PHP yang melakukan redirect ke halaman login ketika pengguna mencoba mengakses halaman profil tanpa berhasil login terlebih dahulu. -->
<?php
    session_start();

    if(!isset($_SESSION['email'])) {
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Style CSS-->
    <link rel="stylesheet" href="style.css">
    <!--Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="profil-body">
        <div class="card-profil card text-center">
            <div class="card-header">
                Selamat Datang Di Halaman Profil
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title"> Anda Login sebagai</h5>
                <!--menampilkan informasi email -->
                <p class="card-text">
                    <?php 
                        echo $_SESSION['email']; 
                    ?>
                </p>
                <!--logout-->
                <a href="logout.php" class="btn btn-primary">Log Out</a>
            </div>
        </div>
    </div>
</body>
</html>