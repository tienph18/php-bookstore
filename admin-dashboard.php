<?php
include 'partials/header.php';

if (!isset($_SESSION['user-id'])) {
    header('location: ' . ROOT_URL . 'signin.php');
    die();
} else {
    $current_user_id = $_SESSION['user-id'];
    $user_query = "SELECT * FROM users WHERE id='$current_user_id'";
    $user_result = mysqli_query($conn, $user_query);
    if(mysqli_num_rows($user_result) > 0) {
        $user = mysqli_fetch_assoc($user_result);
        if ($user['is_admin'] == 0) {
            $_SESSION['message'] = "You are not authorized to access the admin dashboard.";
            $_SESSION['message_type'] = "error";
            header('location: ' . ROOT_URL . 'index.php');
            die();
        }
    } else {
        $_SESSION['message'] = "User session error. Please sign in again.";
        $_SESSION['message_type'] = "error";
        header('location: ' . ROOT_URL . 'signin.php');
        die();
    }
}

// $books_query = "SELECT id, title, author FROM books ORDER BY title ASC"; // Example query
// $books_result = mysqli_query($conn, $books_query);

?>

<section class="dashboard">
    <div class="container dashboard__container">    
        <aside>
            <ul>
                <li><a href="add-book.php"><i class="uil uil-book-medical"></i><h5>Add Book</h5></a></li>
                <li><a href="admin-dashboard.php" class="active"><i class="uil uil-book"></i><h5>Manage Books</h5></a></li>
                <li><a href="manage-users.php"><i class="uil uil-users-alt"></i><h5>Manage Users</h5></a></li>
            </ul>
        </aside>
        <main>
            <h2>Manage Books</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>   
                </thead>
                <tbody>
                    <tr>
                        <td>The Great Gatsby</td>
                        <td>F. Scott Fitzgerald</td>
                        <td>
                            <a href="edit-book.php" class="btn sm">Edit</a>
                        </td>
                        <td>
                            <a href="delete-book.php" class="btn sm danger">Delete</a>
                        </td>
                    </tr>
                </tbody>    
            </table>
        </main> 
    </div>
</section>

<?php
    include 'partials/footer.php';
?>
