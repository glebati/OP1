<?php
ob_start();
session_start();

?>

<!doctype html>
<html>
<head>
    <title>First lab</title>
    <meta charset="UTF-8">
    <meta name="author" content="Gleb">
    <link rel="shortcut icon" href="app/label.ico" type="image/x-icon">
    <link rel="stylesheet" href="app/css/design4.css">
</head>

<body>
<form action="inc/signin.php" method="post">
    <h1 > Sign in </h1>
    <form action="inc/signin.php" method="post">

        <label>Login</label>
        <input type="text" name="login" placeholder="Enter the login">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter the password">
        <p></p>
        <button type="submit" style="font-weight: bold">Log in</button>
        <p></p>
        <label>
            Forgot your password? <a href="recovery.php">Recover it</a>!
        </label>

        <label>
             No account - <a href="register.php">Sign up</a>!
            </label>
        <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>
