<?php
    require 'config/database.php';

    if(isset($_GET['id'])) {
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

        $query = "SELECT * FROM books WHERE id = $id";
        $result = mysqli_query($conn, $query);
        $book = mysqli_fetch_assoc($result);

        //make sure only one user is deleted
        if(mysqli_num_rows($result) == 1) {
            $thumbnail_name = $book['thumbnail'];
            $thumbnail_path = 'images/' . $thumbnail_name;
            if($thumbnail_path) {
                unlink($thumbnail_path);
            }
        }

        $query = "DELETE FROM books WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $query);

        if(mysqli_errno($conn)) {
            $_SESSION['delete-book-error'] = "Failed to delete book";
            header('location: ' . ROOT_URL . 'admin-dashboard.php');
            exit();
        }

        $_SESSION['delete-book-success'] = "Book deleted successfully";
        header('location: ' . ROOT_URL . 'admin-dashboard.php');
        exit();
    } else {
        header('location: ' . ROOT_URL . 'admin-dashboard.php');
        exit();
    }
?>