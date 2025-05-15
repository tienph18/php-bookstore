<?php
include 'partials/header.php';

if (!isset($_SESSION['user-id'])) {
    header('location: ' . ROOT_URL . 'signin.php');
    die();
} else {
    // fetch all books from the database
    $books_query = "SELECT id, title, author FROM books ORDER BY title ASC";
    $books_result = mysqli_query($conn, $books_query);
}

?>

<section class="dashboard">
    <div class="container dashboard__container">    
        <aside>
            <ul>
                <li><a href="admin-dashboard.php" class="active"><i class="uil uil-book"></i><h5>Manage Books</h5></a></li>
                <li><a href="manage-users.php"><i class="uil uil-users-alt"></i><h5>Manage Users</h5></a></li>
            </ul>
        </aside>
        <main>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                <h2>Manage Books</h2>
                <a href="add-book.php" class="btn">Add New Book</a>
            </div>
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
                    <?php while($book = mysqli_fetch_assoc($books_result)): ?>
                        <tr>
                            <td><?= $book['title'] ?></td>
                            <td><?= $book['author'] ?></td>
                            <td>
                                <a href="edit-book.php?id=<?= $book['id'] ?>" class="btn sm">Edit</a>
                        </td>
                        <td>
                            <a href="delete-book.php?id=<?= $book['id'] ?>" class="btn sm danger">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>    
            </table>
        </main> 
    </div>
</section>

<?php
    include 'partials/footer.php';
?>
