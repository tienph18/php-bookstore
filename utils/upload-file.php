<?php
/**
 * Handles file upload with validation
 * 
 * @param array $file - The $_FILES array element
 * @param string $destination_folder - Where to save the file, defaults to 'images/'
 * @param array $allowed_files - Allowed file extensions, defaults to ['png', 'jpg', 'jpeg']
 * @param int $max_size - Maximum file size in bytes, defaults to 1MB
 * @return array - Returns status, filename if successful, error message if failed
 */
function upload_file($file, $destination_folder = 'images/', $allowed_files = ['png', 'jpg', 'jpeg'], $max_size = 1000000) {
    // Check if file was uploaded
    if ($file['error'] !== UPLOAD_ERR_OK) {
        return [
            'status' => false,
            'error' => 'No file uploaded or upload error occurred'
        ];
    }

    // Rename the file
    $time = time(); // Make each filename unique
    $file_name = $time . $file['name'];
    $file_tmp_name = $file['tmp_name'];
    $file_destination_path = $destination_folder . $file_name;

    // Check if file type is allowed
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    if (!in_array($extension, $allowed_files)) {
        return [
            'status' => false,
            'error' => 'File should be ' . implode(', ', $allowed_files)
        ];
    }

    // Check if file is too large
    if ($file['size'] > $max_size) {
        return [
            'status' => false,
            'error' => 'File size too big. Should be less than ' . ($max_size / 1000000) . 'MB'
        ];
    }

    // Upload file
    if (move_uploaded_file($file_tmp_name, $file_destination_path)) {
        return [
            'status' => true,
            'filename' => $file_name,
            'filepath' => $file_destination_path
        ];
    } else {
        return [
            'status' => false,
            'error' => 'Failed to upload file'
        ];
    }
}
?> 