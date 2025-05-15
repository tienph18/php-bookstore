<?php
    require 'config/database.php';
    require 'utils/upload-file.php';

    if(isset($_POST['submit'])) {
        $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $author = filter_var($_POST['author'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $price = isset($_POST['price']) ? filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION) : NULL;
        $is_featured = isset($_POST['is_featured']) ? 1 : 0;
        
        $thumbnail = $_FILES['thumbnail'];
        $thumbnail_name = '';
        
        if($thumbnail['name']) {
            $upload_result = upload_file($thumbnail);
            
            if($upload_result['status']) {
                $thumbnail_name = $upload_result['filename'];
            } else {
                $_SESSION['add-book'] = $upload_result['error'];
            }
        } else {
            $_SESSION['add-book'] = "Please add a thumbnail";
        }

        if(!$title) {
            $_SESSION['add-book'] = "Title required"; 
        } elseif(!$description) {
            $_SESSION['add-book'] = "Description required";
        } elseif(!$author) {
            $_SESSION['add-book'] = "Author required";
        } elseif(!$price) {
            $_SESSION['add-book'] = "Price required";
        } else {
            $query = "INSERT INTO books (title, description, author, price, is_featured, thumbnail, created_date) 
                VALUES ('$title', '$description', '$author', '$price', '$is_featured', '$thumbnail_name', NOW())";
            $result = mysqli_query($conn, $query);

            if(!mysqli_errno($conn)) {
                $_SESSION['add-book-success'] = "Book added successfully";
                header('location: ' . ROOT_URL . 'admin-dashboard.php');
                exit();
            }       
        }

        $_SESSION['add-book-data'] = $_POST;
        header('location: ' . ROOT_URL . 'add-book.php');
        die();
    }       
?>  