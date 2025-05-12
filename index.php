<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multipage BookStore Website</title>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- Google Fonts (Montserrat) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.php" class="nav__logo"><h4>LeowLeow's BookStore</h4></a>
            <ul class="nav__items">
                <li><a href="book.php">Book</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signin.php">Signin</a></li>
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar1.jpg">
                    </div>
                    <ul>
                        <li><a href="admin/dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    
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

    <!-- Render Footer Section -->
     <footer>
        <div class="footer__socials">
            <a href="#"><i class="uil uil-facebook-f"></i></a>
            <a href="#"><i class="uil uil-instagram-alt"></i></a>
            <a href="#"><i class="uil uil-twitter"></i></a>
            <a href="#"><i class="uil uil-linkedin-alt"></i></a>
        </div>
        <div class="container footer__container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="category.php">Art</a></li>
                    <li><a href="category.php">Wild Life</a></li>
                    <li><a href="category.php">Travel</a></li>
                    <li><a href="category.php">Music</a></li>
                    <li><a href="category.php">Science & Tech</a></li>
                    <li><a href="category.php">Food</a></li>
                    <li><a href="category.php">Sport</a></li>
                </ul>
            </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="contact.php">Online Support</a></li>
                    <li><a href="contact.php">Call Numbers</a></li>
                    <li><a href="contact.php">Email</a></li>
                    <li><a href="contact.php">Social Support</a></li>
                    <li><a href="contact.php">Location</a></li>
                </ul>
            </article>
            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="book.php">Book</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </article>
        </div>
        <div class="footer__copyright">
            <small>Copyright &copy; LeowLeow's BookStore</small>
        </div>
     </footer>
</body>
</html>