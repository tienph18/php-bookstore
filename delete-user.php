<?php
    require 'config/database.php';

    if(isset($_GET['id'])) {
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

        //fetch user from database
        $query = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);

        //make sure only one user is deleted
        if(mysqli_num_rows($result) == 1) {
            $avatar_name = $user['avatar'];
            $avatar_path = 'images/' . $avatar_name;
            if($avatar_path) {
                unlink($avatar_path);
            }
        }

        $query = "DELETE FROM users WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $query);

        if(mysqli_errno($conn)) {
            $_SESSION['delete-user-error'] = "Failed to delete user";
            header('location: ' . ROOT_URL . 'manage-users.php');
            exit();
        }

        $_SESSION['delete-user-success'] = "User deleted successfully";
        header('location: ' . ROOT_URL . 'manage-users.php');
        exit();
    } else {
        header('location: ' . ROOT_URL . 'manage-users.php');
        exit();
    }
?>