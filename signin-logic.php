<?php
    include 'config/database.php';

    if(isset($_POST['submit'])) {
        $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if(!$username_email) {
            $_SESSION['signin'] = "Username or Email required";
        } else if(!$password) {
            $_SESSION['signin'] = "Password required";
        } else {
            $sql = "SELECT * FROM users WHERE username = '$username_email' OR email = '$username_email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) == 1) {
                $user_record = mysqli_fetch_assoc($result);
                $db_password = $user_record['password'];

                if(password_verify($password, $db_password)) {
                    $_SESSION['user-id'] = $user_record['id'];
                    header('location: ' . ROOT_URL . 'admin/');
                } else {
                    $_SESSION['signin'] = "Invalid credentials";
                }
            } else {
                $_SESSION['signin'] = "User not found";
            }
        }

        if(isset($_SESSION['signin'])) {
            $_SESSION['signin-data'] = $_POST;
            header('location: ' . ROOT_URL . 'signin.php');
            die();
        }
    } else {
        header('location: ' . ROOT_URL . 'signin.php');
        die();
    }
?>