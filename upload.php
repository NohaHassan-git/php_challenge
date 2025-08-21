
<?php
$target_dir = "challenge_uploads/";

// إنشاء المجلد لو مش موجود
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$allowed = ["jpg", "jpeg", "png", "gif", "php"];


if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "File uploaded successfully: <a href='" . htmlspecialchars($target_file) . "'>" . htmlspecialchars($target_file) . "</a>";
} else {
    echo "Sorry, there was an error uploading your file.";
}
?>
