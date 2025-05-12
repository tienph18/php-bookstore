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
        <section class="form__section">
            <div class="container form__section-container">
                <h2>Sign In</h2>
                <form action="signin.php" method="POST">
                    <input type="text" name="username" placeholder="Username or Email">
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit" name="submit" class="btn">Sign In</button>
                </form>
                <small>Don't have an account? <a href="signup.php">Sign Up</a></small>
            </div>
        </section>
    </body>
</html>