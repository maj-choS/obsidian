<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file_name = $_FILES["file_to_upload"]["name"];
    $file_ext = strtolower(pathinfo($file_name)["extension"]);

    $epoch = strval(time());
    $dest = getcwd() . "/uploads/" . hash("sha256", $file_name . $epoch) . "." . $file_ext;
    $upload_ok = 1;

    if(isset($_POST["submit"])) {

        if (file_exists($dest)) {
            echo "Sorry, file already exists.";
            $upload_ok = 0;
        } else if ($_FILES["file_to_upload"]["size"] > 100000) {
            echo "Sorry, your file is too large.";
            $upload_ok = 0;
        }

        if ($upload_ok == 1) {
            if (move_uploaded_file($_FILES["file_to_upload"]["tmp_name"], $dest))
                echo "The file has been uploaded <span style='font-size:20px;'>&#128579;</span>";
            else
                echo "Sorry, there was an error uploading your file.";
        }

    }
}
?>

