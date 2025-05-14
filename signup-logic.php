<?php
    require 'config/database.php';

    // Make sure the submit button was clicked
    if(isset($_POST['submit'])) {
        // Get form data
        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $avatar = $_FILES['avatar'];

        // Validate input values
        if(!$firstname) {
            $_SESSION['signup'] = "First name required";
            $_SESSION['signup-data'] = $_POST;
            header('location: ' . ROOT_URL . 'signup.php');
            die();
        } elseif(!$lastname) {
            $_SESSION['signup'] = "Last name required";
            $_SESSION['signup-data'] = $_POST;
            header('location: ' . ROOT_URL . 'signup.php');
            die();
        } elseif(!$username) {
            $_SESSION['signup'] = "Username required";
            $_SESSION['signup-data'] = $_POST;
            header('location: ' . ROOT_URL . 'signup.php');
            die();
        } elseif(!$email) {
            $_SESSION['signup'] = "Valid email required";
            $_SESSION['signup-data'] = $_POST;
            header('location: ' . ROOT_URL . 'signup.php');
            die();
        } elseif(strlen($password) < 8) {
            $_SESSION['signup'] = "Password must be at least 8 characters";
            $_SESSION['signup-data'] = $_POST;
            header('location: ' . ROOT_URL . 'signup.php');
            die();
        } elseif(!$password) {
            $_SESSION['signup'] = "Password required";
            $_SESSION['signup-data'] = $_POST;
            header('location: ' . ROOT_URL . 'signup.php');
            die();
        } elseif($password !== $confirmpassword) {
            $_SESSION['signup'] = "Passwords do not match";
            $_SESSION['signup-data'] = $_POST;
            header('location: ' . ROOT_URL . 'signup.php');
            die();
        }

        // Check if avatar was uploaded
        if($avatar['name']) {
            // Rename the image
            $time = time(); // Make each image name unique
            $avatar_name = $time . $avatar['name'];
            $avatar_tmp_name = $avatar['tmp_name'];
            $avatar_destination_path = 'images/' . $avatar_name;

            // Check if file is an image
            $allowed_files = ['png', 'jpg', 'jpeg'];
            $extension = pathinfo($avatar_name, PATHINFO_EXTENSION);
            
            if(in_array($extension, $allowed_files)) {
                // Check if image is too large (1MB+)
                if($avatar['size'] < 1000000) {
                    // Upload avatar
                    move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                } else {
                    $_SESSION['signup'] = "File size too big. Should be less than 1MB";
                    $_SESSION['signup-data'] = $_POST;
                    header('location: ' . ROOT_URL . 'signup.php');
                    die();
                }
            } else {
                $_SESSION['signup'] = "File should be png, jpg, or jpeg";
                $_SESSION['signup-data'] = $_POST;
                header('location: ' . ROOT_URL . 'signup.php');
                die();
            }
        } else {
            $_SESSION['signup'] = "Please add an avatar";
            $_SESSION['signup-data'] = $_POST;
            header('location: ' . ROOT_URL . 'signup.php');
            die();
        }

        // Check if username or email already exists in database
        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
        $user_check_result = mysqli_query($conn, $user_check_query);
        
        if(mysqli_num_rows($user_check_result) > 0) {
            $_SESSION['signup'] = "Username or Email already exists";
            $_SESSION['signup-data'] = $_POST;
            header('location: ' . ROOT_URL . 'signup.php');
            die();
        }

        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user into users table
        $insert_user_query = "INSERT INTO users (firstname, lastname, username, email, password, avatar, is_admin) 
                             VALUES ('$firstname', '$lastname', '$username', '$email', '$hashed_password', '$avatar_name', 0)";
        
        $insert_user_result = mysqli_query($conn, $insert_user_query);

        if($insert_user_result) {
            $_SESSION['signup-success'] = "Registration successful. Please log in";
            header('location: ' . ROOT_URL . 'signin.php');
            die();
        } else {
            $_SESSION['signup'] = "Registration failed: " . mysqli_error($conn);
            $_SESSION['signup-data'] = $_POST;
            header('location: ' . ROOT_URL . 'signup.php');
            die();
        }
    } else {
        // If button wasn't clicked, bounce back to signup page
        header('location: ' . ROOT_URL . 'signup.php');
        die();
    }
?>