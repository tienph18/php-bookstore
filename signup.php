<?php
    require 'config/database.php';

    if(isset($_SESSION['signup-data'])) {
        $firstname = $_SESSION['signup-data']['firstname'];
        $lastname = $_SESSION['signup-data']['lastname'];
        $username = $_SESSION['signup-data']['username'];
        $email = $_SESSION['signup-data']['email'];
        $password = $_SESSION['signup-data']['password'];
        $confirmpassword = $_SESSION['signup-data']['confirmpassword'];
        unset($_SESSION['signup-data']);
    } else {
        $firstname = '';
        $lastname = '';
        $username = '';
        $email = '';
        $password = '';
        $confirmpassword = '';
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive Multipage BookStore Website</title>

        <link rel="stylesheet" href="<?= ROOT_URL ?>/css/style.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

        <!-- Google Fonts (Montserrat) -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <section class="form__section">
            <div class="container form__section-container">
                <h2>Sign Up</h2>
                <?php if(isset($_SESSION['signup'])): ?>
                    <div class="alert__message error">
                        <p>
                            <?= $_SESSION['signup']; 
                            unset($_SESSION['signup']);
                            ?>
                        </p>
                    </div>
                <?php endif ?>
                <form action="<?= ROOT_URL ?>signup-logic.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="First Name">
                    <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Last Name">
                    <input type="text" name="username" value="<?= $username ?>" placeholder="Username">
                    <input type="email" name="email" value="<?= $email ?>" placeholder="Email">
                    <input type="password" name="password" value="<?= $password ?>" placeholder="Password">
                    <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Confirm Password">
                    <div class="form__control">
                        <label for="avatar">Upload Avatar</label>
                        <input type="file" name="avatar">
                    </div>
                    <button type="submit" name="submit" class="btn">Sign Up</button>
                </form>
                <small>Already have an account? <a href="signin.php">Sign In</a></small>
            </div>
        </section>
    </body>
</html>