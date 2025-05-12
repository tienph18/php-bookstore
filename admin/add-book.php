<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multipage BookStore Website</title>

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- Google Fonts (Montserrat) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
    <body>
        <nav>
            <div class="container nav__container">
                <a href="index.html" class="nav__logo"><h4>LeowLeow's BookStore</h4></a>
                <ul class="nav__items">
                    <li><a href="book.html">Book</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="signin.html">Signin</a></li>
                    <li class="nav__profile">
                        <div class="avatar">
                            <img src="./images/avatar1.jpg">
                        </div>
                        <ul>
                            <li><a href="dashboard.html">Dashboard</a></li>
                            <li><a href="logout.html">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
                <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
            </div>
        </nav>
        <section class="form__section">
            <div class="container form__section-container">
                <h2>Add New Book</h2>
                <form action="" method="POST" enctype="multipart/form-data">
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
                    <button type="submit" name="submit" class="btn">Add Book</button>
                </form>
                <small>Don't have an account? <a href="signup.html">Sign Up</a></small>
            </div>
        </section>
        <footer>
            <div class="footer__socials">
                <a href="footer"><i class="uil uil-facebook-f"></i></a>
                <a href="footer"><i class="uil uil-instagram-alt"></i></a>
                <a href="footer"><i class="uil uil-twitter"></i></a>
                <a href="footer"><i class="uil uil-linkedin-alt"></i></a>
            </div>
            <div class="container footer__container">
                <article>
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="footer">Art</a></li>
                        <li><a href="footer">Wild Life</a></li>
                        <li><a href="footer">Travel</a></li>
                        <li><a href="footer">Music</a></li>
                        <li><a href="footer">Science & Tech</a></li>
                        <li><a href="footer">Food</a></li>
                        <li><a href="footer">Sport</a></li>
                    </ul>
                </article>
                <article>
                    <h4>Support</h4>
                    <ul>
                        <li><a href="footer">Online Support</a></li>
                        <li><a href="footer">Call Numbers</a></li>
                        <li><a href="footer">Email</a></li>
                        <li><a href="footer">Social Support</a></li>
                        <li><a href="footer">Location</a></li>
                    </ul>
                </article>
                <article>
                    <h4>Permalinks</h4>
                    <ul>
                        <li><a href="footer">Home</a></li>
                        <li><a href="footer">Book</a></li>
                        <li><a href="footer">About</a></li>
                        <li><a href="footer">Services</a></li>
                        <li><a href="footer">Contact</a></li>
                    </ul>
                </article>
            </div>
            <div class="footer__copyright">
                <small>Copyright &copy; LeowLeow's BookStore</small>
            </div>
         </footer>
    </body>
</html>