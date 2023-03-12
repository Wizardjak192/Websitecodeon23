<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $file = $_FILES['file-upload'];
  $file_name = $file['name'];
  $file_tmp_name = $file['photo'];
  $target_folder = 'uploads/'; // Set the target folder to save the file to

  if (move_uploaded_file($file_tmp_name, $target_folder . $file_name)) {
    echo 'File uploaded successfully.';
  } else {
    echo 'Error uploading file.';
  }
}
?>
