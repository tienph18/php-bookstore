<?php
    include 'partials/header.php';

    if(isset($_SESSION['add-book-data'])) {
        $title = $_SESSION['add-book-data']['title'];
        $description = $_SESSION['add-book-data']['description'];
        $author = $_SESSION['add-book-data']['author'];
        $price = $_SESSION['add-book-data']['price'];
        $is_featured = $_SESSION['add-book-data']['is_featured'];
        unset($_SESSION['add-book-data']);
    } else {
        $title = '';
        $description = '';
        $author = '';
        $price = '';
        $is_featured = '';
    }
?>
        <section class="form__section">
            <div class="container form__section-container">
                <h2>Add New Book</h2>
                <?php if(isset($_SESSION['add-book'])): ?>
                    <div class="alert__message error">
                        <p>
                            <?= $_SESSION['add-book'];
                            unset($_SESSION['add-book']);
                            ?>
                        </p>
                    </div>
                <?php endif ?>  
                
                <form action="<?= ROOT_URL ?>add-book-logic.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="title" value="<?= $title ?>" placeholder="Title">
                    <textarea rows="5" name="description" placeholder="Description"><?= $description ?></textarea>
                    <input type="text" name="author" value="<?= $author ?>" placeholder="Author">
                    <input type="text" name="price" value="<?= $price ?>" placeholder="Price">
                    <div class="form__control inline">
                        <input type="checkbox" name="is_featured" id="is_featured" value="1" <?= $is_featured ? 'checked' : '' ?>>
                        <label for="is_featured">Featured</label>
                    </div>
                    <div class="form__control">
                        <label for="thumbnail">Change Thumbnail</label>
                        <input type="file" name="thumbnail" id="thumbnail">
                    </div>
                    <button type="submit" name="submit" class="btn">Add Book</button>
                </form>
            </div>
        </section>

<?php
    include 'partials/footer.php';
?>