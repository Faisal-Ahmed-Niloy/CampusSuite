<?php 

var_dump($_FILES);
move_uploaded_file($_FILES['file']['tmp_name'], '../uploads/files/' . $_FILES['file']['name']);

echo "<hr>";

echo $_FILES['file']['type'];
echo "<hr>";

echo $_FILES['file']['size'];
echo "<hr>";

if ($_FILES['file']['type'] === "text/plain" || $_FILES['file']['type'] === "application/pdf") {
    echo "upload successful";
} else {
    echo "Please check your file type";
}

if ($_FILES['file']['size'] <= 5 * 1024 * 1024) {
    echo "upload successful";
} else {
    echo "Please check your file size";
}
?>