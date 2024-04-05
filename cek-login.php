<?php 
    session_start();
    // menerima informasi email dan password yang dikirimkan melalui AJAX dan memeriksa kebenaran
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rememberME =  $_POST['remember']; 

    $akun = array(
        "aldzaqwan112@gmail.com" => "IniP@55word",
        "salmahafilah@student.ub.ac.id" => "1niP@ssword",
        "dhearachmaf@student.ub.ac.id" => "@Inipassw0rd",
        "muhamadirkham22@student.ub.ac.id" => "iniP@ssw0rd"
    );

    if (isset($akun[$username]) && $akun[$username] === $password) {
        $_SESSION['email'] = $username;
        if ($rememberME === "true") { 
            setcookie("user", $username, time() + 3600 * 24);
            echo 'berhasil';       
        } else{
            echo 'berhasil';
        }
    } else {
        echo 'gagal';
    }