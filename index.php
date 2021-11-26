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
        Membuat Login Simple Modular e-campuz | Kodingin
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
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h3>Welcome</h3>
        <p>Anda sudah berhasil login </p>
            <a href="logout.php">Logout</a>
        </p>
    </div>
</body>
</html>
