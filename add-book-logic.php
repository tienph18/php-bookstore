<?php
    require 'config/database.php';

    if(isset($_POST['submit'])) {
        $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $author = filter_var($_POST['author'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);
        $is_featured = filter_var($_POST['is_featured'], FILTER_SANITIZE_NUMBER_INT);
        
        //handle thumbnail upload
        $thumbnail = $_FILES['thumbnail'];
        if($thumbnail['error'] == UPLOAD_ERR_OK) {
            //rename thumbnail
            $time = time();
            $thumbnail_name = $time . $thumbnail['name'];
            $thumbnail_tmp_name = $thumbnail['tmp_name'];
            $thumbnail_destination_path = 'images/' . $thumbnail_name;

            //make sure file is an image
            $allowed_files = ['png', 'jpg', 'jpeg'];
            $extension = pathinfo($thumbnail['name'], PATHINFO_EXTENSION);

            if(in_array($extension, $allowed_files)) {
                //check if image is too large (1MB+)
                if($thumbnail['size'] < 1000000) {
                    //upload thumbnail
                    move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);
                }
            }
        }
    }       
?>  