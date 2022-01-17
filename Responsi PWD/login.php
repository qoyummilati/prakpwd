
<?php

require_once "dbconfig.php";
if ($user->isLoggedIn()) {
    header("location: index.html");
}
if (isset($_POST['kirim'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($user->login($email, $password)) {
        header("location: index.html");
    } else {
        $error = $user->getLastError();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
</head>
<body class="bg">
    <div class="layout1">
    <div class="login-page">
        <div class="form">
            <form class="login-form" method="post">
                <?php if (isset($error)) : ?>
                    <div class="error">
                        <?php echo $error ?>
                    </div>
                <?php endif; ?>
                <input type="email" name="email" placeholder="email" required />
                <input type="password" name="password" placeholder="password" required />
                <button type="submit" name="kirim">login</button>
                <p class="message">Not registered? <a href="register.php">Create an account</a></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>