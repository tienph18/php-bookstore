<?php
    include 'partials/header.php';

    //fetch users from database except current user
    $current_user_id = $_SESSION['user-id'];
    $query = "SELECT * FROM users WHERE id != $current_user_id";
    $users = mysqli_query($conn, $query);
?>

<section class="dashboard">
    <div class="container dashboard__container">
        <aside>
            <ul>
                <li><a href="add-book.php"><i class="uil uil-book-medical"></i><h5>Add Book</h5></a></li>
                <li><a href="admin-dashboard.php"><i class="uil uil-book"></i><h5>Manage Books</h5></a></li>
                <li><a href="manage-users.php" class="active"><i class="uil uil-users-alt"></i><h5>Manage Users</h5></a></li>
            </ul>
        </aside>
        <main>
            <h2>Manage Users</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>User Role</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($user = mysqli_fetch_assoc($users)): ?>
                        <tr>
                            <td><?= $user['firstname'] . ' ' . $user['lastname'] ?></td>
                            <td><?= $user['is_admin'] == 1 ? 'Admin' : 'User' ?></td>
                            <td><a href="<?= ROOT_URL ?>edit-user.php?id=<?= $user['id'] ?>" class="btn sm">Edit</a></td>
                            <td><a href="<?= ROOT_URL ?>delete-user.php?id=<?= $user['id'] ?>" class="btn sm danger">Delete</a></td>
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
