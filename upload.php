<?php
$target_dir = "uploads/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$allowed = ["jpg", "jpeg", "png", "gif"];
if (!in_array($imageFileType, $allowed)) {
    die("Only image files are allowed!");
}

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "File uploaded successfully: " . htmlspecialchars($target_file);
} else {
    echo "Sorry, there was an error uploading your file.";
}
?>
