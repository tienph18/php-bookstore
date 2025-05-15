<?php
include 'partials/header.php';

if (!isset($_SESSION['user-id'])) {
    header('location: ' . ROOT_URL . 'signin.php');
    die();
} else {
    $books_per_page = 3;
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($current_page - 1) * $books_per_page;
    
    $count_query = "SELECT COUNT(*) AS total FROM books";
    $count_result = mysqli_query($conn, $count_query);
    $total_books = mysqli_fetch_assoc($count_result)['total'];
    $total_pages = ceil($total_books / $books_per_page);
    
    $books_query = "SELECT id, title, author FROM books ORDER BY title ASC LIMIT $books_per_page OFFSET $offset";
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
            
            <?php if($total_pages > 1): ?>
            <div class="pagination" style="margin-top: 2rem; display: flex; justify-content: center; gap: 0.5rem;">
                <?php if($current_page > 1): ?>
                    <a href="?page=<?= $current_page-1 ?>" class="btn sm">&laquo; Prev</a>
                <?php endif; ?>
                
                <?php for($i = 1; $i <= $total_pages; $i++): ?>
                    <a href="?page=<?= $i ?>" class="btn sm <?= $i == $current_page ? 'active' : '' ?>">
                        <?= $i ?>
                    </a>
                <?php endfor; ?>
                
                <?php if($current_page < $total_pages): ?>
                    <a href="?page=<?= $current_page+1 ?>" class="btn sm">Next &raquo;</a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </main> 
    </div>
</section>

<?php
    include 'partials/footer.php';
?>
