<?php
    include 'partials/header.php';

    // Get limit books from the database
    $query = "SELECT * FROM books ORDER BY created_date DESC LIMIT 10";
    $books = mysqli_query($conn, $query);
?>
    
    <!-- Render Featured Section -->
    <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbnail">
                <img src="./images/blog19.jpg">
            </div>
            <div class="post__info">
                <a class="category__button">Wild Life</a>
                <h2 class="post__title"><a href="post.php">Lorem ipsum, dolor set amet caremen sala omunatalya. Aliquid!</a></h2>
                <p class="post__body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quo, laudantium.
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar2.jpg">
                    </div>
                    <div class="post__author-info">
                        <h5>By: LeowLeow</h5>
                        <small>June 19, 2022 - 07:21</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Featured Section -->

    <!-- Render Posts Section -->
    <section class="posts">
        <div class="container posts__container">
            <?php while($book = mysqli_fetch_assoc($books)): ?>
                <article class="post">
                <div class="post__thumbnail">
                    <?php $thumbnail_path = 'images/' . $book['thumbnail']; ?>
                    <?php if(file_exists($thumbnail_path)): ?>
                        <img src="<?= $thumbnail_path ?>">
                    <?php else: ?>
                        <img src="./images/blog19.jpg">
                    <?php endif ?>
                </div>
                <div class="post__info">
                    <h3 class="post__title"><a href="post.php"><?= $book['title'] ?></a></h3>
                    <p class="post__body text-clamp">
                        <?= $book['description'] ?>
                    </p>
                    <div class="post__author">
                        <!-- <div class="post__author-avatar">
                            <img src="./images/avatar3.jpg">
                        </div> -->
                        <div class="post__author-info">
                            <h5>By: <?= $book['author'] ?></h5>
                            <small><?= $book['created_date'] ?></small>
                        </div>
                    </div>
                </div>
            </article>
            <?php endwhile ?>
            
        </div>
    </section>
    <!-- End of Posts Section -->
<?php
    include 'partials/footer.php';
?>