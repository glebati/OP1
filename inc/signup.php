<?php
    ob_start();
    session_start();
    #require_once 'connect.php';
    include ('connect.php');

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
    if (mysqli_num_rows($check_user) === 0) {

        if ($password === $password_confirm) {

            $password_h = password_hash($password, PASSWORD_BCRYPT);

            if (!empty($login) && !empty($email) && !empty($password) && !empty($password_confirm)) {
                mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password_h')");
                header('Location: ../login.php');

            } else {
                $_SESSION['message'] = "Empty field";
                header('Location: ../register.php');
            }

        } else {
            $_SESSION['message'] = "Passwords don't match";
            header('Location: ../register.php');
        }
    } else {
        $_SESSION['message'] = "Username already exists";
        header('Location: ../register.php');
    }

?>
