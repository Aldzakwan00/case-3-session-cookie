<!-- kode program PHP yang melakukan redirect ke halaman login ketika pengguna logout dari halaman profil. -->
<?php
    session_start();
    session_unset();
    session_destroy();

    header("Location: index.php");
    exit();