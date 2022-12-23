<?php
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

    <form action="inc/recpass.php" method="post">
        <h1 > Recovery password </h1>
        <label>Login</label>
        <input type="text" name="login" placeholder="Enter the login">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter the password">
        <label>Confirm password</label>
        <input type="password" name="password_confirm" placeholder="Enter the password">
        <button type="submit" style="font-weight: bold">Change password</button>
        <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>
