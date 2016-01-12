<?php
include 'config.php';
$judul=$_POST['judul'];
$desk=$_POST['deskripsi'];

$folder='photo_content/';
$target=$folder.basename($_FILES["photo"]["name"]);

$uploadOk=1;
$imageFileType = pathinfo($target,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($target)) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image."
        ."</br>".
        "<a href=\"home.php\" class=\"btn btn-info\" role=\"button\">Ok. <Kembali></a>";;
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target)) {
    echo "Sorry, file already exists."
    ."</br>".
        "<a href=\"home.php\" class=\"btn btn-info\" role=\"button\">Ok. <Kembali></a>";;
    $uploadOk = 0;
}
// Check file size
if ($_FILES["photo"]["size"] > 700000) {
    echo "Sorry, your file is too large."
    ."</br>".
        "<a href=\"home.php\" class=\"btn btn-info\" role=\"button\">Ok. <Kembali></a>";;
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed."
    ."</br>".
        "<a href=\"home.php\" class=\"btn btn-info\" role=\"button\">Ok. <Kembali></a>";;
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded."
    ."</br>".
        "<a href=\"home.php\" class=\"btn btn-info\" role=\"button\">Ok. <Kembali></a>";;
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target)) {
        $save=mysql_query("INSERT INTO `content`(`id_content`, `judul_content`, `deskripsi_content`, `gambar_content`, `status_content`) 
        VALUES ('','$judul','$desk','$target','0')");
        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded."."</br>".
        "<a href=\"home.php\" class=\"btn btn-info\" role=\"button\">Ok. <Kembali></a>";
    } else {
        echo "Sorry, there was an error uploading your file.".
        "<a href=\"home.php\" class=\"btn btn-info\" role=\"button\">Ok. <Kembali></a>";;
    }
}

?>
