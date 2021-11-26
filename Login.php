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
        border: 1px solid yellow;
        padding: 5px;
    }
</style>

<body>
    <div class="wrapper">
        <h1>Login</h1>
        <form action="proses_login.php" method="POST">
            <h4>
                <input type="User name " placeholder="username" name="username">
            </h4>
            <h4>
                <input type="password" placeholder="password" name="password">
            </h4>
            <h4>
                <input type="submit" value="Login">
            </h4>
        </form>
    </div>
</body>
</html>
