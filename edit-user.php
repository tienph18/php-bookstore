<?php
    include 'partials/header.php';

    if(isset($_GET['id'])) {
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        $query = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);
    } else {
        header('location: ' . ROOT_URL . 'manage-users.php');
        exit();
    }
?>
    <section class="form__section">
        <div class="container form__section-container">
            <h2> Edit User</h2>
            <form action="<?= ROOT_URL ?>edit-user-logic.php" method="POST">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <input type="text" name="firstname" value="<?= $user['firstname'] ?>" placeholder="First Name">
                <input type="text" name="lastname" value="<?= $user['lastname'] ?>" placeholder="Last Name">
                <input type="text" name="email" value="<?= $user['email'] ?>" placeholder="Email">
                <select name="is_admin">
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                </select>
                <button type="submit" name="submit" class="btn">Update User</button>
            </form>
        </div>
    </section> 
<?php
    include 'partials/footer.php';
?>