<?php

include "mysql.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, md5($_POST['password']));

    $query = "SELECT * FROM users WHERE username= '$username' AND password = '$password'";
    $queryDB = mysqli_query($mysqli, $query);
    $check = mysqli_num_rows($queryDB);

    if ($check > 0) {
       
        $getData = mysqli_fetch_array($queryDB);
        
        $_SESSION['name'] = $getData;
        $_SESSION['is_login']  = true;

        header("location: index.php");
    } else {
        echo "username atau password yang kamu masukkan salah";
    }
} else {
    return "kamu tidak bisa login";
}
