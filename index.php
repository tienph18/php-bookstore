<?php
    include 'partials/header.php';
?>
    
    <!-- Render Featured Section -->
    <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbnail">
                <img src="./images/blog1.jpg">
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
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog2.jpg">
                </div>
                <div class="post__info">
                    <a href="category.php" class="category__button">Wild Life</a>
                    <h3 class="post__title"><a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, laudantium.</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quo, laudantium.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar3.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: LeowLeow</h5>
                            <small>June 19, 2022 - 07:21</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog3.jpg">
                </div>
                <div class="post__info">
                    <a href="category.php" class="category__button">Wild Life</a>
                    <h3 class="post__title"><a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, laudantium.</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quo, laudantium.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar4.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: LeowLeow</h5>
                            <small>June 19, 2022 - 07:21</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog4.jpg">
                </div>
                <div class="post__info">
                    <a href="category.php" class="category__button">Wild Life</a>
                    <h3 class="post__title"><a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, laudantium.</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quo, laudantium.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar4.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: LeowLeow</h5>
                            <small>June 19, 2022 - 07:21</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog5.jpg">
                </div>
                <div class="post__info">
                    <a href="category.php" class="category__button">Wild Life</a>
                    <h3 class="post__title"><a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, laudantium.</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quo, laudantium.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar4.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: LeowLeow</h5>
                            <small>June 19, 2022 - 07:21</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!-- End of Posts Section -->

    <!-- Render Categories Section -->
    <section class="category__buttons">
        <div class="container category__buttons-container">
            <a href="category.php" class="category__button">Art</a>
            <a href="category.php" class="category__button">Wild Life</a>
            <a href="category.php" class="category__button">Travel</a>
            <a href="category.php" class="category__button">Music</a>
            <a href="category.php" class="category__button">Science & Tech</a>
            <a href="category.php" class="category__button">Food</a>
            <a href="category.php" class="category__button">Sport</a>
        </div>
    </section>
    <!-- End of Categories Section -->

<?php
    include 'partials/footer.php';
?>