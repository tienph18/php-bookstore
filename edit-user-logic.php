<?php
    require 'config/database.php';

    if(isset($_POST['submit'])) {
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $is_admin = filter_var($_POST['is_admin'], FILTER_SANITIZE_NUMBER_INT);

        //validate input values
        if(!$firstname || !$lastname) {
            $_SESSION['edit-user'] = "Invalid form data on edit page";
            header('location: ' . ROOT_URL . 'edit-user.php');
            exit();
        }

        //update user
        $query = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', email = '$email',
            is_admin = '$is_admin' WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $query);

        if(mysqli_errno($conn)) {
            $_SESSION['edit-user-error'] = "Failed to update user";
            header('location: ' . ROOT_URL . 'edit-user.php');
            exit();
        }

        $_SESSION['edit-user-success'] = "User updated successfully";
        header('location: ' . ROOT_URL . 'manage-users.php');
        exit();
    }
?>