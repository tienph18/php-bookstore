<?php
    include 'partials/header.php';
?>
        <section class="form__section">
            <div class="container form__section-container">
                <h2> Edit Book</h2>
                <form action="" method="PUT" enctype="multipart/form-data">
                    <input type="text" name="title" placeholder="Title">
                    <textarea rows="5" name="description" placeholder="Description"></textarea>
                    <input type="text" name="author" placeholder="Author">
                    <input type="text" name="price" placeholder="Price">
                    <div class="form__control inline">
                        <input type="checkbox" id="is_featured">
                        <label for="is_featured">Featured</label>
                    </div>
                    <div class="form__control">
                        <label for="thumbnail">Upload Thumbnail</label>
                        <input type="file" id="thumbnail">
                    </div>
                    <button type="submit" name="submit" class="btn">Update Book</button>
                </form>
            </div>
        </section>
        
<?php
    include 'partials/footer.php';
?>