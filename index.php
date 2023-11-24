<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <div class="container">
        <form action="controller/login.php" method="POST" class="login-username">
            <p class="login-text" stlye="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <button type="submit" class="btn">Login</button>
            </div>
            <p class="login register text">Anda belum punya akun <a href="register.php">Silahkan Register</a></p>
        </form>
</body>
</html>