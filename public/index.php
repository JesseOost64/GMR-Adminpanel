<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GMR || Login</title>
    <link rel="stylesheet" href="assets/styles/login.css">
</head>
<body>
    <img src="assets/images/GMRTemp.png" alt="Temp GMR logo">
    <h1>Login to your admin account</h1>
    <div class="loginForm">
        <form method="post" action="<?= htmlentities($_SERVER["PHP_SELF"]) ?>">
            <input type="userName" name="userName" placeholder="Username">
            <input type="password" name="password" placeholder="Password">

            <input type="submit" value="login">
        </form>
    </div>
</body>
</html>