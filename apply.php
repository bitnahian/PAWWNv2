<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }


 $name = $_SESSION['name'];
 //$email = $_SESSION'email'];
 $clc = $_GET['clc'];


 $connection = mysqli_connect("localhost", "root"); // Establishing connection with server..

if(!$connection)
{
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$db = mysqli_select_db($connection, "pawwn"); // Selecting Database.

$stmt = $connection->prepare("INSERT INTO application(name, clc, target_file) 
            VALUES(?, ?, ?)");
        $stmt->bind_param("sss", $name,$clc,$target_file);

if($stmt->execute()){
//if($query){
            echo "Application has been received";
        } else {
            echo "Error....!!";
        }
}
//mysqli_close ($connection);

?>