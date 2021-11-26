<?php
session_start();

if (!$_SESSION["is_login"] === TRUE) {
    header("location: login.php");
    exit;
}
?>

<html>
<head>
    <title>
        Membuat Login Simple Modular e-campuz
    </title>
    <style>
        .wrapper {
            width: 400px;
            margin: 20% auto;
            padding: 40px;
        }

        form input {
            width: 100%;
            height: 40px;
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h4>Welcome</h4>
        <h6>Anda sudah berhasil login </h6>
            <a href="logout.php">Logout</a>
    </div>
</body>
</html>
