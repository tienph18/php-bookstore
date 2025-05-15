<?php
    include 'partials/header.php';

    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $price = $_POST['price'];
        $is_featured = isset($_POST['is_featured']) ? 1 : 0;

        // log above data
        echo $id . "<br>";
        echo $title . "<br>";
        echo $description . "<br>";
        echo $author . "<br>";
        echo $price . "<br>";
        echo $is_featured . "<br>";

        if(!$title || !$description || !$author || !$price) {
            $_SESSION['edit-book'] = "Invalid form data on edit page";
            header('location: ' . ROOT_URL . 'edit-book.php');
            exit();
        }
        
        $query = "UPDATE books SET title='$title', description='$description', author='$author', price='$price', is_featured='$is_featured' WHERE id=$id LIMIT 1";
        $result = mysqli_query($conn, $query);

        if(mysqli_errno($conn)) {
            $_SESSION['edit-book-error'] = "Failed to update book";
            header('location: ' . ROOT_URL . 'edit-book.php');
            die();
        }

        $_SESSION['edit-book-success'] = "Book updated successfully";
        header('location: ' . ROOT_URL . 'admin-dashboard.php');
        exit();
    }
?>

<?php
    include 'partials/footer.php';
?>