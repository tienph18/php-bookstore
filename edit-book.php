<?php
    include 'partials/header.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM books WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $book = mysqli_fetch_assoc($result);
?>
    <section class="form__section">
        <div class="container form__section-container">
            <h2> Edit Book</h2>
            <form action="<?= ROOT_URL ?>edit-book-logic.php" method="POST">
                <input type="hidden" name="id" value="<?= $book['id'] ?>">
                <input type="text" name="title" placeholder="Title" value="<?= $book['title'] ?>">
                <textarea rows="5" name="description" placeholder="Description"><?= $book['description'] ?></textarea>
                <input type="text" name="author" placeholder="Author" value="<?= $book['author'] ?>">
                <input type="text" name="price" placeholder="Price" value="<?= $book['price'] ?>">
                <div class="form__control inline">
                    <input type="checkbox" id="is_featured" name="is_featured" value="1" <?= $book['is_featured'] == 1 ? 'checked' : '' ?>>
                    <label for="is_featured">Featured</label>
                </div>
                <button type="submit" name="submit" class="btn">Update Book</button>
            </form>
        </div>
    </section>  
<?php
    include 'partials/footer.php';
?>