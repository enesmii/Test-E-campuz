<html>

<head>
    <title>Login Simple Modular E-campuz</title>
</head>
<style>
    .wrapper {
        width: 500px;
        box-shadow: 2px 3px 5px rgba(0, 0, 0, .5);
        margin: 20% auto;
        padding: 30px;
    }

    form input {
        width: 100%;
        height: 40px;
        border: 1px solid black;
        padding: 5px;
    }
</style>

<body>
    <div class="wrapper">
        <h1>Login</h1>
        <form action="proses_login.php" method="POST">
            <p>
                <input type="User name " placeholder="username" name="username">
            </p>
            <p>
                <input type="password" placeholder="password" name="password">
            </p>
            <p>
                <input type="submit" value="Login">
            </p>
        </form>
    </div>
</body>
</html>
